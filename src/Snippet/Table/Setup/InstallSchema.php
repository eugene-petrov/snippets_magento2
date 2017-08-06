<?php

namespace Snippet\Table\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Snippet\Table\Model\Resource\Snippet;

/**
 * Class InstallSchema
 * @package Training\Vendor\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()
            ->newTable($setup->getTable(Snippet::TABLE_NAME))
            ->addColumn(
                'entity_id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'Entity ID'
            )
            ->addColumn('name', Table::TYPE_TEXT, 255, ['nullable' => false], 'Name')
            ->addColumn('created_at', Table::TYPE_TIMESTAMP, null, [], 'Creation Time')
            ->addColumn('updated_at', Table::TYPE_TIMESTAMP, null, [], 'Modification Time')
            ->addColumn('is_active', Table::TYPE_SMALLINT, null, ['nullable' => false, 'default' => 0], 'Is Active')
            ->setComment('Snippet Example Table');
        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
