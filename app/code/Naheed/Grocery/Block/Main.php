<?php

namespace Naheed\Grocery\Block;

/**
 * Class Main
 */
class Main extends \Magento\Framework\View\Element\Template
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

        $todo = $this->bookFactory->create();
        // $todo->setData('name', 'test')
        // ->setData('email','email')
        // ->setData('products','products')
        // ->setData('phone','13158648')
        // ->save();
        // var_dump('Done');
        $todo = $todo->load(1);   
        var_dump($todo->getData());
        exit;
    }
}