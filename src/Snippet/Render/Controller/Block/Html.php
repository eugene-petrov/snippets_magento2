<?php

namespace Snippet\Render\Controller\Block;

use Magento\Framework\App\Action\Action;
use Snippet\Render\Block\Html as HtmlBlock;

/**
 * Class Html
 * @package Snippet\Render\Controller\Block
 */
class Html extends Action
{
    /**
     * @return void
     */
    public function execute()
    {
        $layout = $this->_view->getLayout();
        $block = $layout->createBlock(HtmlBlock::class);
        $this->getResponse()->appendBody($block->toHtml());
    }
}
