<?php
/* @var $this MbCarsController */
/* @var $model MbCars */

$this->breadcrumbs=array(
	'Mb Cars'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MbCars', 'url'=>array('index')),
	array('label'=>'Create MbCars', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mb-cars-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Mb Cars</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mb-cars-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'placa',
		'apelido',
		'marca',
		'modelo',
		'ativo',
		/*
		'alterador',
		'data_criacao',
		'data_alteracao',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
