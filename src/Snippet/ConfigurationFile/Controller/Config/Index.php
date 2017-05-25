<?php

namespace Snippet\ConfigurationFile\Controller\Config;

use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Snippet\ConfigurationFile\Model\Config\ConfigInterface;

/**
 * Banner loading
 */
class Index extends Action
{
    /**
     * @var ConfigInterface
     */
    private $customConfig;

    /**
     * @param Context $context
     * @param ConfigInterface $customConfig
     */
    public function __construct(Context $context, ConfigInterface $customConfig)
    {
        parent::__construct($context);
        $this->customConfig = $customConfig;
    }

    /**
     * return void
     */
    public function execute()
    {
        $myNodeInfo = $this->customConfig->getCustomNodeInfo();
        if (is_array($myNodeInfo)) {
            foreach ($myNodeInfo as $str) {
                $this->getResponse()->appendBody($str . '<br />');
            }
        }
    }
}
