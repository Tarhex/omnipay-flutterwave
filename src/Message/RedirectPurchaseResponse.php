<?php
namespace Omnipay\CreditCardPaymentProcessor\Message;


use Omnipay\Common\Message\AbstractResponse;

class RedirectPurchaseResponse extends AbstractResponse
{
    private $endPointTest = 'https://ravesandboxapi.flutterwave.com';
    private $endPointProduction = 'https://api.ravepay.co';

    public function isSuccessful()
    {
        return false;
    }

    public function isRedirect()
    {
        return true;
    }

    public function isTransparentRedirect()
    {
        return true;
    }

    public function getTransactionId()
    {
        return $this->getData()['order_id'];
    }

    public function getRedirectUrl()
    {
        return $this->request->getTestMode() ? $this->endPointTest : $this->endPointProduction;
    }

    public function getRedirectMethod()
    {
        return 'POST';
    }

    public function getRedirectData()
    {
        return $this->getData();
    }

}