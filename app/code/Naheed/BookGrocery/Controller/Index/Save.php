<?php

namespace Naheed\BookGrocery\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Controller\DataFactory;
use Naheed\BookGrocery\Model\BookGrocery;

class Save extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_pageFactory;
    private $bookFactory;
    private $dataPersistor;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        BookGrocery $bookFactory,
        DataPersistorInterface $dataPersistor
    ) {
        $this->bookFactory = $bookFactory;
        $this->dataPersistor = $dataPersistor;
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }
    /**
     * View page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $post = "placeholder for below";
        //  $this->getRequest()->getPostValue();

        if (!$post) {
            $this->_redirect('*/*/index');
            return;
        }

        // try {
            $book = $this->bookFactory->create();
            $book->setName($this->getRequest()->getParam('name'));
            $book->setEmail($this->getRequest()->getParam('email'));
            $book->setPhone($this->getRequest()->getParam('phone'));
            $book->setHaving($this->getRequest()->getParam('having'));
            $book->setProducts($this->getRequest()->getParam('products'));
            // $bookRepository->save($book);
            $resultRedirect = $this->resultRedirectFactory->create();
            $resultRedirect->setPath('naheed1/success');
            return $resultRedirect;
        // } catch (error) {
            return $book = $this->bookFactory->create();
        // }
    }
}
