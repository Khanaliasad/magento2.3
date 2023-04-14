<?php
namespace Naheed\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class TestBlock extends Template
{
    protected $_categoryCollectionFactory;
    protected $_categoryHelper;
    protected $_productCollectionFactory;
    
    public function __construct(
        \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory,
        \Magento\Catalog\Helper\Category $categoryHelper,
    	\Magento\Framework\View\Element\Template\Context $context, 
    	\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, 
    	array $data = []
    )
    {
    	$this->_productCollectionFactory = $productCollectionFactory; 
    	$this->_categoryCollectionFactory = $categoryCollectionFactory;
        $this->_categoryHelper = $categoryHelper;
   	parent::__construct($context, $data);
    }
    
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    
    public function getCategoryCollection($isActive = true, $level = false, $sortBy = false, $pageSize = false)
    {
        $collection = $this->_categoryCollectionFactory->create();
        $collection->addAttributeToSelect('*');        

        if ($isActive) {
            $collection->addIsActiveFilter();
        }

        if ($level) {
            $collection->addLevelFilter($level);
        }


        if ($sortBy) {
            $collection->addOrderField($sortBy);
        }


        if ($pageSize) {
            $collection->setPageSize($pageSize); 
        }    

        return $collection;
    }


    public function getStoreCategories($sorted = false, $asCollection = false, $toLoad = true)
    {
        return $this->_categoryHelper->getStoreCategories($sorted = false, $asCollection = true, $toLoad = true);
    }

    public function getProductCollection()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
       $collection->setPageSize(3); // fetching only 3 products
        return $collection;
    }
}


