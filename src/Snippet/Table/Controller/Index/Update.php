<?php

namespace Snippet\Table\Controller\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Snippet\Table\Model\Snippet as SnippetModel;
use Snippet\Table\Model\SnippetFactory;

/**
 * Class Update
 * @package Snippet\Table\Controller\Index
 */
class Update extends Action
{
    /**
     * @var SnippetModel
     */
    private $snippetModel;

    /**
     * Update constructor.
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
        $id = (int) $this->getRequest()->getParam('id', 1);
        $description = (string) $this->getRequest()->getParam('description', 'Updated description');

        $this->snippetModel->getResource()->load($this->snippetModel, $id);
        if (!$this->snippetModel->getEntityId()) {
            $this->getResponse()->appendBody('Nothing to update');
            return;
        }
        $this->snippetModel->setDescription($description);
        $this->snippetModel->getResource()->save($this->snippetModel);
        $this->getResponse()->appendBody("Snippet \"{$this->snippetModel->getName()}\" has been updated");
    }
}
