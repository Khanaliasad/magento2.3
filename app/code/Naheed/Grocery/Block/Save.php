<?php
namespace Naheed\Grocery\Block;

/**
 * Class Save
 */
class Save extends \Magento\Framework\View\Element\Template
{
    protected $bookFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Naheed\Grocery\Model\BookGroceryFactory $bookFactory
    ) {
        $this->bookFactory = $bookFactory;
        parent::__construct($context);
    }
    function _prepareLayout()
    {
        $request = $this->getRequest();
        // $bookFactoryObject = $this->bookFactory->create();
        // die(print_r($request->getParams()));
    }
}