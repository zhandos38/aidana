<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%specialty}}`.
 */
class m210529_101030_create_specialty_table extends Migration
{
    public $tableame = '{{%specialty}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableame, [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'passing_score' => $this->integer(),
            'subject_id' => $this->integer(),
            'demand_level' => $this->tinyInteger(),
            'bot_girl_ratio' => $this->tinyInteger(),
            'description' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableame);
    }
}
