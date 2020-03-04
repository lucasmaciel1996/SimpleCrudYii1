<?php

class m200304_023538_create_companies_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('mb_companies', array(
				'id' => 'pk',
				'cnpj' =>'VARCHAR(20) NOT NULL',
				'razao_social' => 'VARCHAR(40)',
				'endereco' => 'VARCHAR(100)',
				'email'=>'VARCHAR(40)',
				'ativo' =>'BOOLEAN DEFAULT 1',
				'telefone'=>'VARCHAR(40)',
				'alterador'=>'INTEGER(11)',
				'data_criacao' => 'DATETIME',
				'data_alteracao' => 'DATETIME',
		));
	}
 
	public function down()
	{
		$this->dropTable('mb_companies');
	}
}