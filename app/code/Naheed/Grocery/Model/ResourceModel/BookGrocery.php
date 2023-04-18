<?php
namespace Naheed\Grocery\Model\ResourceModel;

/**
 * Class BookGrocery
 */
class BookGrocery extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init('bookgrocery', 'id');
    }
}
