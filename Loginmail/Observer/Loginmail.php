<?php
namespace I95dev\Loginmail\Observer;

use Magento\Framework\Event\ObserverInterface;
use I95dev\Loginmail\Helper\Email;


class Loginmail implements ObserverInterface
{
    private $helperEmail;
    
    public function __construct(
        Email $helperEmail
    ) {
        $this->helperEmail = $helperEmail;
    }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        return $this->helperEmail->sendEmail();
    }
}
