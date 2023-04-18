<?php
namespace Naheed\Grocery\Block;

/**
 * Class View
 */
class View extends \Magento\Framework\View\Element\Template
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
        var_dump('check');
        $data = $this->bookFactory->create();
        $collection = $data->getCollection();
        foreach ($collection as $item) {
            var_dump('Item ID: ' . $item->getId());
            var_dump($item->getData());
        }
    }
}