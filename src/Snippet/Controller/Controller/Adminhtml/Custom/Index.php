<?php

namespace Snippet\Controller\Controller\Adminhtml\Custom;

use Magento\Backend\App\Action;

/**
 * Class Index
 * @package Snippet\Controller\Controller\Adminhtml\Custom
 */
class Index extends Action
{
    public function execute()
    {
        $this->getResponse()->appendBody('Hi, there!');
    }
}
