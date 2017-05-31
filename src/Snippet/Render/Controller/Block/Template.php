<?php

namespace Snippet\Render\Controller\Block;

use Magento\Framework\App\Action\Action;
use Magento\Framework\View\Element\Template as TemplateElement;

/**
 * Class Template
 * @package Snippet\Render\Controller\Block
 */
class Template extends Action
{
    /**
     * @return void
     */
    public function execute()
    {
        $block = $this->_view->getLayout()->createBlock(TemplateElement::class);
        $block->setTemplate('template.phtml');
        $this->getResponse()->appendBody($block->toHtml());
    }
}
