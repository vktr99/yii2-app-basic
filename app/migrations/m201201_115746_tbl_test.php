<?php

use yii\db\Migration;

/**
 * Class m201201_115746_tbl_test
 */
class m201201_115746_tbl_test extends Migration
{
    const TBL_NAME = "{{%tbl_test}}";

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::TBL_NAME, [
            'id' => $this->primaryKey(11)->unsigned() . ' AUTO_INCREMENT',
            'value' => $this->string(256)->defaultValue('')->notNull(),
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(self::TBL_NAME);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201201_115746_tbl_test cannot be reverted.\n";

        return false;
    }
    */
}
