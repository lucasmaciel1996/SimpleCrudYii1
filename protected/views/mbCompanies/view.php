<?php
/* @var $this MbCompaniesController */
/* @var $model MbCompanies */

$this->breadcrumbs=array(
	'Mb Companies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MbCompanies', 'url'=>array('index')),
	array('label'=>'Create MbCompanies', 'url'=>array('create')),
	array('label'=>'Update MbCompanies', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MbCompanies', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MbCompanies', 'url'=>array('admin')),
);
?>

<h1>View MbCompanies #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cnpj',
		'razao_social',
		'endereco',
		'email',
		'ativo',
		'telefone',
		'alterador',
		'data_criacao',
		'data_alteracao',
	),
)); ?>
