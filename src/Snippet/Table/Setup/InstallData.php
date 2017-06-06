<?php

namespace Snippet\Table\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\InstallDataInterface;
use Snippet\Table\Model\Resource\Snippet;

/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()
            ->insertArray(
                $setup->getTable(Snippet::TABLE_NAME),
                $this->getColumns(),
                $this->getData()
            );

        $setup->endSetup();
    }

    /**
     * @return array
     */
    private function getData()
    {
        $date = gmdate('Y-m-d H:i:s');
        return [
            ['Configuration File', $date, $date, '1',],
            ['Controller', $date, $date, '0',],
            ['Layout', $date, $date, '0',],
            ['Render', $date, $date, '1',],
            ['Plugin', $date, $date, '0',],
        ];
    }

    /**
     * @return array
     */
    private function getColumns()
    {
        return [
            'name',
            'created_at',
            'updated_at',
            'is_active',
        ];
    }
}
