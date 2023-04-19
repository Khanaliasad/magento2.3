<?php
namespace Naheed\Grocery\Model;

class BookGroceryFactory
{
    protected $objectManager;
    public function __construct(
        \Magento\Framework\ObjectManagerInterface $objectManager
    ) {
        $this->objectManager = $objectManager;
    }

    public function create(array $arg = [])
    {
        return $this->objectManager->create("Naheed\Grocery\Model\BookGrocery", $arg);
    }

}