<?php

namespace Snippet\ConfigurationFile\Model\Config;

use Magento\Framework\Config\ConverterInterface;

/**
 * Class Converter
 * @package Snippet\ConfigurationFile\Model\Config
 */
class Converter implements ConverterInterface
{
    /**
     * Convert dom node tree to array
     *
     * @param \DOMDocument $source
     * @return array
     * @throws \InvalidArgumentException
     */
    public function convert($source)
    {
        $output = [];
        /** @var $optionNode \DOMNode */
        foreach ($source->getElementsByTagName('custom_node') as $node) {
            $output[] = $node->textContent;
        }
        return $output;
    }
}
