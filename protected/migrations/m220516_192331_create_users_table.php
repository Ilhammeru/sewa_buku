<?php

class m220516_192331_create_users_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('users', [
			'id' => 'pk',
			'name' => 'string NOT NULL',
			'email' => 'string NOT NULL',
			'password' => 'text NOT NULL',
			'last_login' => 'timestamp default CURRENT_TIMESTAMP',
			'created_at' => 'timestamp default CURRENT_TIMESTAMP',
			'updated_at' => 'timestamp default CURRENT_TIMESTAMP'
		]);
	}

	public function down()
	{
		$this->dropTable('users');
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