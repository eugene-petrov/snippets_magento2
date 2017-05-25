<?php

namespace Snippet\ConfigurationFile\Model;

use Magento\Framework\Config\CacheInterface;
use Magento\Framework\Config\Data;

/**
 * Interface ConfigInterface
 * @package Snippet\ConfigurationFile\Model
 */
class Config extends Data implements Config\ConfigInterface
{
    /**
     * Config constructor.
     * @param Config\Reader $reader
     * @param CacheInterface $cache
     * @param string $cacheId
     */
    public function __construct(Config\Reader $reader, CacheInterface $cache, $cacheId = 'snippet_custom_config')
    {
        parent::__construct($reader, $cache, $cacheId);
    }

    /**
     * @return string
     */
    public function getCustomNodeInfo()
    {
        return $this->get();
    }
}
