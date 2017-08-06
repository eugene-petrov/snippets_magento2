<?php

namespace Snippet\Table\Model\Resource;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Snippet
 * @package Training\Vendor\Model\Resource
 */
class Snippet extends AbstractDb
{
    const TABLE_NAME = 'snippet_example_table';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, 'entity_id');
    }

    /**
     * {@inheritdoc}
     */
    protected function _beforeSave(AbstractModel $object)
    {
        $date = gmdate('Y-m-d H:i:s');
        if (!$object->getCreatedAt()) {
            $object->setCreatedAt($date);
        }
        $object->setUpdatedAt($date);
        return $this;
    }
}
