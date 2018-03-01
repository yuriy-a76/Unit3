<?php
namespace Unit3\Test\Controller\Block;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $block = $this->_view->getLayout()->createBlock(\Magento\Framework\View\Element\Text::class);
        $block->setText("Hello world from text block !");
        $this->getResponse()->appendBody($block->toHtml());
    }
}