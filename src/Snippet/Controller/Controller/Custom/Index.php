<?php

namespace Snippet\Controller\Controller\Custom;

use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\Action;

/**
 * Banner loading
 */
class Index extends Action
{
    /**
     * @var string
     */
    private $snippetString;

    /**
     * @var array
     */
    private $snippetArray;

    /**
     * @param Context $context
     * @param string $snippetString
     * @param array $snippetArray
     */
    public function __construct(Context $context, string $snippetString = '', array $snippetArray = array())
    {
        parent::__construct($context);
        $this->snippetString = $snippetString;
        $this->snippetArray = $snippetArray;
    }

    /**
     * return void
     */
    public function execute()
    {
        $text = 'Snippet String Value: ' . $this->snippetString . '<br>';
        $text .= 'Snippet Array Value: ' . print_r($this->snippetArray, true) . '<br>';

        $this->getResponse()->appendBody($text);
    }
}
