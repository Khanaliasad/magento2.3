<?php
namespace Naheed\BookGrocery\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class BookGrocery extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('bookgrocery', 'id');
    }
}
