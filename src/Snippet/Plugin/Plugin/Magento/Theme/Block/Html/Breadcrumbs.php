<?php

namespace Snippet\Plugin\Plugin\Magento\Theme\Block\Html;

use \Magento\Theme\Block\Html\Breadcrumbs as OriginBreadcrumbs;

/**
 * Class Header
 * @package Snippet\Plugin\Plugin\Magento\Theme\Block\Breadcrumbs
 *
 * @see \Magento\Theme\Block\Html\Breadcrumbs
 */
class Breadcrumbs
{
    /**
     * @param OriginBreadcrumbs $subject
     * @param string $crumbName
     * @param array $crumbInfo
     *
     * @return array
     */
    public function beforeAddCrumb(OriginBreadcrumbs $subject, string $crumbName, array $crumbInfo)
    {
        $crumbInfo['label'] = '(' . __($crumbInfo['label']) . ')';
        return [$crumbName, $crumbInfo];
    }
}
