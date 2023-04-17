<?php
namespace Naheed\BookGrocery\Block;

use Magento\Framework\View\Element\Template;

class BookGrocery extends Template
{
    protected $customerSession;
  /**
     * @var \Naheed\BookGrocery\Model\BookGroceryFactory
     */
    private $bookGroceryFactory;

    /**
     * BookGrocery constructor.
     * @param Template\Context $context
     * @param array $data
    //  * @param \Naheed\BookGrocery\Model\BookGroceryFactory $bookGroceryFactory
     */
    public function __construct(
        Template\Context $context,
        \Magento\Customer\Model\Session $customerSession,
        array $data = []
        // \Naheed\BookGrocery\Model\BookGroceryFactory $bookGroceryFactory
    ) {
        $this->customerSession = $customerSession;
        // $this->bookGroceryFactory = $bookGroceryFactory;
        parent::__construct($context, $data);
    }

    public function getCustomerInfo()
    {
        $customerData = [];
        $customer = $this->customerSession->getCustomer();
        $customerData['name'] = $customer->getName();
        $customerData['email'] = $customer->getEmail();
        return $customerData;
    }
    public function getBookGroceryData()
    {
        $bookGroceryData = $this->bookGroceryFactory->create()->getCollection()->getData();
        return $bookGroceryData;
    }
}

