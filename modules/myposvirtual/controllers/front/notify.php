<?php

use Mypos\IPC\Defines;
use Mypos\IPC\Response;

class MyposVirtualNotifyModuleFrontController extends ModuleFrontController
{
	public function postProcess()
	{
		if ($this->module->active)
		{
            require_once __DIR__ . '/../../sdk/Loader.php';

            $config = $this->module->getMyposVirtualConfig();

            if (Tools::isSubmit('Signature')) {
                try{
                    $response = Response::getInstance($config, $_POST, Defines::COMMUNICATION_FORMAT_POST);
                    $data = $response->getData(CASE_LOWER);

                    if (Configuration::get('mypos_virtual_test_mode')) {
                        $data['orderid'] = str_replace(Configuration::get('mypos_virtual_test_prefix'), '', $data['orderid']);
                    }

                    $cart = new Cart($data['orderid']);
	                $address = new Address((int)$cart->id_address_delivery);
	                $this->context->country = new Country((int)$address->id_country);
                    $this->context->cart = $cart;

                    if (!Validate::isLoadedObject($cart)) {
                        die('Invalid cart ID');
                    }

                    $currency = new Currency((int)Currency::getIdByIsoCode($data['currency']));

                    if (!Validate::isLoadedObject($currency) || $currency->id != $cart->id_currency) {
                        die('Invalid currency ID');
                    }

                    $this->context->currency = $currency;

                    $order = new Order((int)Order::getIdByCartId($cart->id));

                    $cartTotal = $cart->getOrderTotal(true);

                    if ($data['amount'] != $cartTotal) {
                    	var_dump($data['amount']); echo '<br/>';
                    	var_dump($cartTotal); echo '<br/>';
                        die('Invalid amount paid');
                    }

                    switch($data['ipcmethod'])
                    {
                        case 'IPCPurchaseNotify':

                            $this->module->addTransaction('payment', array(
                                'id_shop' => (int)$cart->id_shop,
                                'id_customer' => (int)$cart->id_customer,
                                'id_cart' => (int)$cart->id,
                                'id_order' => $order->id,
                                'id_transaction' => $data['ipc_trnref'],
                                'amount' => (float)$data['amount'],
                                'currency' => $data['currency'],
                            ));

                            //add payment
                            if (!$order->addOrderPayment((float)$data['amount'], null, $data['ipc_trnref'])) {
                                PrestaShopLogger::addLog('PaymentModule::validateOrder - Cannot save Order Payment', 3, null, 'Cart', (int)$cart->id, true);
                                throw new PrestaShopException('Can\'t save Order Payment');
                            } else {
                                $order_status = Configuration::get('PS_OS_PAYMENT');
                                $new_history = new OrderHistory();
                                $new_history->id_order = (int)$order->id;
                                $new_history->changeIdOrderState($order_status, $order, true);
                                $new_history->addWithemail(true);
                            }

                            die('OK');
                        case 'IPCPurchaseRollback':
                            $order_status = Configuration::get('PS_OS_ERROR');

                            if ($cart->orderExists())
                            {
                                $new_history = new OrderHistory();
                                $new_history->id_order = (int)$order->id;
                                $new_history->changeIdOrderState($order_status, $order, true);
                                $new_history->addWithemail(true);
                            } else {
                                die('Order not found for this cart.');
                            }

                            die('OK');
                        default:
                            die('Invalid method.');
                    }
                } catch(\Mypos\IPC\IPC_Exception $e) {
                    echo "Exception: \n";
                    var_dump($e->getMessage());die;

                }
            }
		}
	}
}
