<?php

use yii\db\Migration;

/**
 * Class m210310_034436_comments
 */
class m210310_034436_comments extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(),
            'text' => $this->string()->notNull(),
            'date_create' => $this->date('Y-m-d H:i:s'),
            'ball' => $this->integer(),
            'author_id' => $this->integer(),
            'article_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%comments}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210310_034436_comments cannot be reverted.\n";

        return false;
    }
    */
}
