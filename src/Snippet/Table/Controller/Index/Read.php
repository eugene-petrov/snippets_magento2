<?php

namespace Snippet\Table\Controller\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Snippet\Table\Model\Snippet as SnippetModel;
use Snippet\Table\Model\SnippetFactory;

/**
 * Class Read
 * @package Snippet\Table\Controller\Index
 */
class Read extends Action
{
    /**
     * @var SnippetModel
     */
    private $snippetModel;

    /**
     * Read constructor.
     * @param Context $context
     * @param SnippetFactory $snippetFactory
     */
    public function __construct(Context $context, SnippetFactory $snippetFactory)
    {
        parent::__construct($context);
        $this->snippetModel = $snippetFactory->create();
    }

    /**
     * return void
     */
    public function execute()
    {
        $collection = $this->snippetModel->getCollection();

        foreach ($collection as $item) {
            var_dump('Item ID: ' . $item->getEntityId());
            var_dump($item->getData());
        }
    }
}
