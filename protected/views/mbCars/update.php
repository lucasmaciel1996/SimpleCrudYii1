<?php
/* @var $this MbCarsController */
/* @var $model MbCars */

$this->breadcrumbs=array(
	'Mb Cars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MbCars', 'url'=>array('index')),
	array('label'=>'Create MbCars', 'url'=>array('create')),
	array('label'=>'View MbCars', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MbCars', 'url'=>array('admin')),
);
?>

<h1>Update MbCars <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>