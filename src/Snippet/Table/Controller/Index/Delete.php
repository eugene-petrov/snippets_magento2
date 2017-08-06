<?php

namespace Snippet\Table\Controller\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Snippet\Table\Model\Snippet as SnippetModel;
use Snippet\Table\Model\SnippetFactory;

/**
 * Class Delete
 * @package Snippet\Table\Controller\Index
 */
class Delete extends Action
{
    /**
     * @var SnippetModel
     */
    private $snippetModel;

    /**
     * Delete constructor.
     * @param Context $context
     * @param SnippetFactory $snippetFactory
     */
    public function __construct(Context $context, SnippetFactory $snippetFactory)
    {
        parent::__construct($context);
        $this->snippetModel = $snippetFactory->create();
    }

    /**
     * @return void
     */
    public function execute()
    {
        $this->snippetModel->getResource()->load($this->snippetModel, 'Table', 'name');
        $this->snippetModel->getResource()->delete($this->snippetModel);
        $this->getResponse()->appendBody('A row "Table" has been deleted');
    }
}
