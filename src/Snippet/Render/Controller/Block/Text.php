<?php

namespace Snippet\Render\Controller\Block;

use Magento\Framework\App\Action\Action;
use Magento\Framework\View\Element\Text as TextElement;

/**
 * Class Text
 * @package Snippet\Render\Controller\Block
 */
class Text extends Action
{
    /**
     * @return void
     */
    public function execute()
    {
        $block = $this->_view->getLayout()->createBlock(TextElement::class);
        $block->setText("Text block");
        $this->getResponse()->appendBody($block->toHtml());
    }
}
