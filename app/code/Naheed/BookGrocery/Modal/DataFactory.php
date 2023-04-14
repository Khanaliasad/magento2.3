<?php

namespace Naheed\BookGrocery\Model;

use Magento\Framework\Model\AbstractModel;
use Naheed\BookGrocery\Model\ResourceModel\BookGrocery as BookGroceryResourceModel;

class BookGrocery extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(BookGroceryResourceModel::class);
    }
}
