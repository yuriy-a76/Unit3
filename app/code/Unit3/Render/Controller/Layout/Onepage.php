<?php
namespace Unit3\Render\Controller\Layout;

class Onepage extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
        )
    {
            $this->resultPageFactory = $resultPageFactory;
            parent::__construct($context);
    }
    
    public function execute()
    {
        $page = $this->resultPageFactory->create();
        return $page;
    }
}