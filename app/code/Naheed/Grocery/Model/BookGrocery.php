<?php
namespace Naheed\Grocery\Model;

/**
 * Class BookGrocery
 */
class BookGrocery extends \Magento\Framework\Model\AbstractModel
{

    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(\Naheed\Grocery\Model\ResourceModel\BookGrocery::class);
    }

}
