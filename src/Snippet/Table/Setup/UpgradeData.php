<?php

namespace Snippet\Table\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;
use Snippet\Table\Model\Resource\Snippet;

/**
 * Class UpgradeData
 * @package Snippet\Table\Setup
 */
class UpgradeData implements UpgradeDataInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $this->upgrade101($setup, $context);
        $setup->endSetup();
    }

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return $this
     */
    private function upgrade101(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '1.0.1', '>=')) {
            return $this;
        }
        $table = $setup->getTable(Snippet::TABLE_NAME);
        foreach ($this->getData101() as $item) {
            $setup->getConnection()->update($table, $item['bind'], $item['where']);
        }
        return $this;
    }

    /**
     * @return array
     */
    private function getData101()
    {
        $date = gmdate('Y-m-d H:i:s');
        return [
            [
                'bind' => [
                    'updated_at' => $date,
                    'description' => 'a custom config file',
                ],
                'where' => 'name = "Configuration File"',
            ],
            [
                'bind' => [
                    'updated_at' => $date,
                    'description' => 'custom controllers',
                ],
                'where' => 'name = "Controller"',
            ],
            [
                'bind' => [
                    'updated_at' => $date,
                    'description' => 'a custom layout',
                ],
                'where' => 'name = "Layout"',
            ],
            [
                'bind' => [
                    'updated_at' => $date,
                    'description' => 'render examples',
                ],
                'where' => 'name = "Render"',
            ],
            [
                'bind' => [
                    'updated_at' => $date,
                    'description' => 'a custom plugin',
                ],
                'where' => 'name = "Plugin"',
            ],
        ];
    }
}
