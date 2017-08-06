<?php

namespace Snippet\Table\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Snippet\Table\Model\Resource\Snippet;

/**
 * Class UpgradeSchema
 * @package Snippet\Table\Setup
 */
class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $this->upgrade101($setup, $context);
        $setup->endSetup();
    }

    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return $this
     */
    private function upgrade101(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '1.0.1') >= 0) {
            return $this;
        }
        $setup->getConnection()->addColumn(
            $setup->getTable(Snippet::TABLE_NAME),
            'description',
            [
                'type'     => Table::TYPE_TEXT,
                'length'   => '1k',
                'nullable' => true,
                'comment'  => 'Description'
            ]
        );
        return $this;
    }
}
