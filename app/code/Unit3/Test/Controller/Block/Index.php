<?php
namespace Unit3\Test\Controller\Block;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $layout = $this->_view->getLayout();
        $block = $layout->createBlock(\Unit3\Test\Block\Test::class);
        $this->getResponse()->appendBody($block->toHtml());
    }
}