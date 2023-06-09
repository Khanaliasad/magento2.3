<?php

namespace Naheed\Grocery\Setup;

/**
 * Class InstallSchema
 */

use Magento\Setup\Exception;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    /**
     * @inheritDoc
     * @throws \Zend_Db_Exception
     */
    public function install(
        \Magento\Framework\Setup\SchemaSetupInterface $setup,
        // \Magento\Framework\Setup\UpgradeSchemaInterface $setup,
        \Magento\Framework\Setup\ModuleContextInterface $context
    ) {
        $installer = $setup;

        //START table setup
        try {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('bookgrocery')
            )->addColumn(
                    'id',
                        \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'unsigned' => true,
                        'nullable' => false,
                        'primary' => true,
                    ],
                    'ID'
                )->addColumn(
                    'name',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'Name'
                )->addColumn(
                    'email',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'Email'
                )->addColumn(
                    'phone',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'Phone'
                )->addColumn(
                    'products',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    '64k',
                    ['nullable' => false],
                    'Products'
                )->setComment(
                    'BookGrocery Table'
                );
            $installer->getConnection()->createTable($table);
            //END   table setup
            $installer->endSetup();
        } catch (Exception $err) {
            \Magento\Framework\App\ObjectManager::getInstance()->get('Psr\Log\LoggerInterface')->info($err->getMessage());
        }
    }
}