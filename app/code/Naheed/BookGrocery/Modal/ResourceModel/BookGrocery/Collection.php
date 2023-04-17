<?php

namespace Naheed\BookGrocery\Modal\ResourceModel\BookGrocery;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function __construct()
    {
        $this->_init(
            'Naheed\BookGrocery\Model\BookGrocery',
            'Naheed\BookGrocery\Model\ResourceModel\BookGrocery'
        );
    }
}
