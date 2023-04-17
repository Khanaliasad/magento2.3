<?php

namespace Naheed\BookGrocery\Controller\Index;

use Magento\Framework\Data\Form\FormKey\Validator as FormKeyValidator;
use Magento\Framework\App\RequestInterface;
// use app\code\Naheed\BookGrocery\Model\DataFactory;

class Index extends \Magento\Framework\App\Action\Action
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
        die(printf($request->getparam("name")));
        $resultPage = $this->resultPageFactory->create();
        $resultPage->addHandle('bookgrocery_index_index');
        $resultPage->getConfig()->getTitle()->set(__('Book Grocery'));
        return $resultPage;

        if (!$this->formKeyValidator->validate($request) && !$request) {
            $this->messageManager->addError(__('Please fill in all required fields.'));
            // $this->_redirect('*/*/');
            return $resultPage;
        } else {

            $name = trim($request->getParam('name'));
            $email = trim($request->getParam('email'));
            $phone = trim($request->getParam('phone'));
            $having = trim($request->getParam('having'));
            $products = trim($request->getParam('products'));
            // die(print_r($name));
            // Save form data to the database
            // $formData = $this->dataFactory->create();
            // $formData->setData($data);
            // $formData->save();
        }


        // $name = trim($request->getParam('name'));
        $email = trim($request->getParam('email'));
        // $phone = trim($request->getParam('phone'));
        // $having = trim($request->getParam('having'));
        // $products = trim($request->getParam('products'));
        // print_r($name);
        // if (empty($name) || empty($email) || empty($phone) || empty($products)) {
        //     $this->messageManager->addError(__('Please fill in all required fields.'));
        //     // $this->_redirect('*/*/');
        //     // return;
        // }

        if (!\Zend_Validate::is($email, 'EmailAddress') && !$request) {
            $this->messageManager->addError(__('Please enter a valid email address.'));
            // $this->_redirect('*/*/');
            // return;
        }

        // // Process form data here

        // $this->messageManager->addSuccess(__('Thank you for booking grocery with us! We will contact you shortly.'));
        // $this->_redirect('*/*/');
        // $this->_view->loadLayout();
        // $this->_view->renderLayout();
        return $resultPage;
        // }
    }
}
