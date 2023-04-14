<?php

namespace Naheed\BookGrocery\Model;

use Magento\Framework\Model\AbstractModel;

class BookGrocery extends AbstractModel
{

    protected function _construct()
    {

        $this
            ->_init(
                \Naheed\BookGrocery\Model\ResourceModel\BookGrocery
                ::class
            );
    }
}
