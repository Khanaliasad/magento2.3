<?php
namespace Naheed\Grocery\Controller\Index;

class Save extends \Magento\Framework\App\Action\Action
{

    protected $_pageFactory;
    protected $bookFactory;


    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Naheed\Grocery\Model\BookGroceryFactory $bookFactory
    ) {
        $this->bookFactory = $bookFactory;
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $request = $this->getRequest();
        $data = $request->getParams();
        $bookFactoryObject = $this->bookFactory->create();
        if (count($data) == 5) {
            $bookFactoryObject->setData("email", $data["email"]);

            $bookFactoryObject->setData("name", $data["name"])
                ->setData("phone", $data["phone"])
                ->setData("products", $data["products"])
                ->save();

            

            /*$record = [
                "email" => $data["email"],
                "phone" => $data["phone"],
                "products" => $data["products"],
            ];
            $bookFactoryObject->setData($record);
            $bookFactoryObject->save();

            $bookFactoryObject->setEmail($data["email"]);
            $bookFactoryObject->setPhone($data["phone"]);
            $bookFactoryObject->save();
            */

            //echo ("data sent in obj");
            $this->_redirect('*/*/sucess');
            return;
        } else {
            // $this->_redirect('*/*/');
            return;

        }
        // var_dump(get_class($this->bookFactory));
        echo ("<Br>");
        // print_r(var_dump($data["email"]));
        echo ("<Br>");
        // die(print_r(var_dump($data)));

        // echo ($request->getParam("email"));
        // return;
        // return $this->resultPageFactory->create();

        // return $this->_pageFactory->create();
    }
}