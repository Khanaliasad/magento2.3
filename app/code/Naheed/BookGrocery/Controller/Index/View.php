<?php

namespace Naheed\BookGrocery\Controller\View;

use Magento\Framework\Data\Form\FormKey\Validator as FormKeyValidator;
use Magento\Framework\App\RequestInterface;
// use app\code\Naheed\BookGrocery\Model\DataFactory;

class View extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    // protected $dataFactory;
    protected $formKeyValidator;
    protected $postFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        FormKeyValidator $formKeyValidator
        // \Naheed\BookGrocery\Modal\PostFactory $postFactory
        // DataFactory $dataFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;

        // $this->dataFactory = $dataFactory;
        $this->formKeyValidator = $formKeyValidator;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
        $request = $this->getRequest();
        $resultPage = $this->resultPageFactory->create();
        $resultPage->addHandle('bookgrocery_index_view');
        $resultPage->getConfig()->getTitle()->set(__('Book Grocery'));
        return $resultPage;

       
    }
}
