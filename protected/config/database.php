<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	'connectionString' => 'mysql:host=172.17.0.2;dbname=yii_app',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => 'root',
	'charset' => 'utf8',
);