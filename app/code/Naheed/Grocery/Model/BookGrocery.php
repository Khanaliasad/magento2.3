<?php
namespace Naheed\Grocery\Model;

/**
 * Class BookGrocery
 */
class BookGrocery extends \Magento\Framework\Model\AbstractModel implements
    \Naheed\Grocery\Api\Data\BookGroceryInterface,
    \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'bookgrocery';

    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(\Naheed\Grocery\Model\ResourceModel\BookGrocery::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
