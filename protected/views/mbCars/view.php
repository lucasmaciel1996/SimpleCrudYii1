<?php
/* @var $this MbCarsController */
/* @var $model MbCars */

$this->breadcrumbs=array(
	'Mb Cars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MbCars', 'url'=>array('index')),
	array('label'=>'Create MbCars', 'url'=>array('create')),
	array('label'=>'Update MbCars', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MbCars', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MbCars', 'url'=>array('admin')),
);
?>

<h1>View MbCars #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'placa',
		'apelido',
		'marca',
		'modelo',
		'ativo',
		'alterador',
		'data_criacao',
		'data_alteracao',
	),
)); ?>
