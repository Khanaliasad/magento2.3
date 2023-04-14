<?php

namespace Naheed\BookGrocery\Model\ResourceModel\MyModel;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'Naheed_BookGrocery_collection';
    protected $_eventObject = 'BookGrocery_collection';

    protected function _construct()
    {
        $this->_init(
            'Vendor\BookGrocery\Model\MyModel',
            'Vendor\BookGrocery\Model\ResourceModel\MyModel'
        );
    }
}
