<?php
namespace Naheed\Grocery\Model\ResourceModel\BookGrocery;

/**
 * Class Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(
            \Naheed\Grocery\Model\BookGrocery::class,
            \Naheed\Grocery\Model\ResourceModel\BookGrocery::class
        );
    }
}
