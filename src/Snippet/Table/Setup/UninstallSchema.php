<?php

namespace Snippet\Table\Setup;

use Magento\Framework\Setup\UninstallInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Snippet\Table\Model\Resource\Snippet;

/**
 * Class InstallSchema
 * @package Training\Vendor\Setup
 */
class InstallSchema implements UninstallInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function uninstall(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $setup->getConnection()->dropTable($setup->getTable(Snippet::TABLE_NAME));
        $setup->endSetup();
    }
}
