<?php

namespace Naheed\BookGrocery\Block;

use Magento\Framework\View\Element\Template;
use Naheed\BookGrocery\Model\ResourceModel\Book\Collection;
use Naheed\BookGrocery\Model\ResourceModel\Book\CollectionFactory;


class View extends Template
{
    private $bookCollectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $bookCollectionFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->bookCollectionFactory = $bookCollectionFactory;
    }

    public function getBooks(): Collection
    {
        return $this->bookCollectionFactory->create();
    }
}
