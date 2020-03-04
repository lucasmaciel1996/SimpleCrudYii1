<?php
/* @var $this MbCompaniesController */
/* @var $model MbCompanies */

$this->breadcrumbs=array(
	'Mb Companies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MbCompanies', 'url'=>array('index')),
	array('label'=>'Manage MbCompanies', 'url'=>array('admin')),
);
?>

<h1>Create MbCompanies</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>