<?php

class m220516_191041_create_books_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('books', [
			'id' => 'pk',
			'title' => 'string NOT NULL',
			'description' => 'text',
			'price' => 'integer',
			'is_active' => 'integer',
			'created_at' => 'timestamp default CURRENT_TIMESTAMP',
			'updated_at' => 'timestamp default CURRENT_TIMESTAMP'
		]);
	}

	public function down()
	{
		$this->dropTable('books');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}