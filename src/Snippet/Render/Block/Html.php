<?php

namespace Snippet\Render\Block;

use Magento\Framework\View\Element\AbstractBlock;

/**
 * Class Test
 * @package Snippet\Render\Block
 */
class Html extends AbstractBlock
{
    /**
     * @return string
     */
    protected function _toHtml()
    {
        return "<b>HTML from block</b>";
    }
}
