<?php

use yii\db\Migration;

/**
 * Class m210310_034425_authors
 */
class m210310_034425_authors extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%authors}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'login' => $this->string(500)->notNull(),
            'password' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%authors}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210310_034425_authors cannot be reverted.\n";

        return false;
    }
    */
}
