<?php

namespace Snippet\Controller\Controller\Adminhtml\Custom;

use Magento\Backend\App\Action;

class Index extends Action
{
    public function execute()
    {
        $this->getResponse()->appendBody('Hi, there!');
    }
}
