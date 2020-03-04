<?php

class m200304_023524_create_cars_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('mb_cars', array(
				'id' => 'pk',
				'placa' =>'VARCHAR(20) NOT NULL',
				'apelido' => 'VARCHAR(20)',
				'marca' => 'VARCHAR(40)',
				'modelo'=>'VARCHAR(40)',
				'ativo' =>'BOOLEAN DEFAULT 1',
				'alterador'=>'INTEGER(11)',
				'data_criacao' => 'DATETIME',
				'data_alteracao' => 'DATETIME',
		));
	}
 
	public function down()
	{
		$this->dropTable('mb_cars');
	}
}