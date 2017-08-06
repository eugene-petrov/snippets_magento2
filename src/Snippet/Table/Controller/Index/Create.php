<?php

namespace Snippet\Table\Controller\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Snippet\Table\Model\Snippet as SnippetModel;
use Snippet\Table\Model\SnippetFactory;

/**
 * Class Create
 * @package Snippet\Table\Controller\Index
 */
class Create extends Action
{
    /**
     * @var SnippetModel
     */
    private $snippetModel;

    /**
     * Create constructor.
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
        $data = [
            'name' => 'Table',
            'description' => 'table creation and crud operations examples',
        ];
        $this->snippetModel->addData($data);
        $this->snippetModel->getResource()->save($this->snippetModel);
        $body = 'Inserted: ' . print_r($data, true);
        $this->getResponse()->appendBody($body);
    }
}
