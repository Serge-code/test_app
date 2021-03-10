<?php

use yii\db\Migration;

/**
 * Class m210310_014504_articles
 */
class m210310_014504_articles extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%articles}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'text' => $this->string(500)->notNull(),
            'author_id' => $this->integer(),
            'created_at' => $this->date('Y-m-d H:i:s'),
            'updated_at' => $this->date('Y-m-d H:i:s'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%articles}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210310_014504_articles cannot be reverted.\n";

        return false;
    }
    */
}
