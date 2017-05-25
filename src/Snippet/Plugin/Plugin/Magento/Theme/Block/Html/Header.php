<?php

namespace Snippet\Plugin\Plugin\Magento\Theme\Block\Html;

use \Magento\Theme\Block\Html\Header\Interceptor;

/**
 * Class Header
 * @package Snippet\Plugin\Plugin\Magento\Theme\Block\Html
 *
 * @see \Magento\Theme\Block\Html\Header
 */
class Header
{
    /**
     * @param Interceptor $subject
     * @param \Closure $proceed
     * @param array ...$args
     * @return mixed
     */
    public function aroundGetWelcome(Interceptor $subject, \Closure $proceed, ...$args)
    {
        // Write your custom code here
        return $proceed(...$args);
    }

    /**
     * @param Interceptor $subject
     * @param string $result
     * @return string
     */
    public function afterGetWelcome(Interceptor $subject, string $result = null)
    {
        if (empty($result)) {
            return $result;
        }
        return '(' . $result . ')';
    }
}
