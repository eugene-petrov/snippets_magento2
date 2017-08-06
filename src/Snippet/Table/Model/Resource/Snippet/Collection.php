<?php

namespace Snippet\Table\Model\Resource\Snippet;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Snippet\Table\Model\Resource\Snippet as SnippetResource;
use Snippet\Table\Model\Snippet as SnippetModel;

/**
 * Class Collection
 * @package Snippet\Table\Model\Resource\Snippet
 */
class Collection extends AbstractCollection
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(SnippetModel::class, SnippetResource::class);
    }
}
