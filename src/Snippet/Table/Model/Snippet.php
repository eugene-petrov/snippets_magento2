<?php

namespace Snippet\Table\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use Snippet\Table\Model\Resource\Snippet as SnippetResource;

/**
 * Class Snippet
 * @package Snippet\Table\Model
 */
class Snippet extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = 'snippet_data';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(SnippetResource::class);
    }

    /**
     * Return unique ID(s) for each object in system
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
