<?php
namespace Naheed\HelloWorld\Controller\Index;
 
class Test extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
 
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
 
    public function execute()
{
    	$this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
        $resultPage = $this->resultPageFactory->create();
        $resultPage->addHandle('bookgrocery_index_index');
        $resultPage->getConfig()->getTitle()->set(__('Book Grocery'));

        return $resultPage;
}
}
