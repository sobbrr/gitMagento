<?php
namespace First\Hello\Controller\Hello;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class Word extends \Magento\Framework\App\Action\Action{

    /**
     * Word constructor.
     * @param Context $context
     */
    public function __construct(\Magento\Framework\App\Action\Context $context)
    {
        parent::__construct($context);
    }


    public function execute()
    {
        echo 'Hello Word';
        exit;
    }
}