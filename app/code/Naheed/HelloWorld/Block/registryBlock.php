<?php
namespace Naheed\HelloWorld\Block;

use Magento\Framework\View\Element\Template;
use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory as CategoryCollectionFactory; 
class RegistryBlock extends Template
{
    protected $_registry;
    protected $_CategoryCollectionFactory;

    public function __construct(
        
        \Magento\Framework\Registry $registry,
        // Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $CategoryCollectionFactory,
        \Magento\Framework\View\Element\Template\Context $context, 
    	array $data = []
    )
    {
        // $this->$CategoryCollectionFactory = $CategoryCollectionFactory;
    	$this->_registry = $registry; 
    	
   	parent::__construct($context, $data);
    }
    
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    
    public function getCurrentCategory()
    {        
        return $this->_registry->registry('current_category');
    }
    
    public function getCurrentProduct()
    {        
        return $this->_registry->registry('current_product');

    }   
    // public function getCategoryUrls()
    
    // {
    //     $categoryUrls = [];
    //     $categories = $this->categoryCollectionFactory->create();
    //     $categories->addAttributeToSelect('url_path');
    //     foreach ($categories as $category) {
    //         if (!is_null($category->getData('url_path'))) {
    //             $categoryUrls[] = rtrim($this->getUrl($category->getData('url_path')), '/') .
    //                 $this->getConfigData(self::CATEGORY_URL_SUFFIX);
    //         }
    //     }
 
    //     return $categoryUrls;
    // } 
};


