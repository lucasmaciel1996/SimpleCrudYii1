<?php
/* @var $this MbCarsController */
/* @var $model MbCars */

$this->breadcrumbs=array(
	'Mb Cars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MbCars', 'url'=>array('index')),
	array('label'=>'Manage MbCars', 'url'=>array('admin')),
);
?>

<h1>Create MbCars</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>