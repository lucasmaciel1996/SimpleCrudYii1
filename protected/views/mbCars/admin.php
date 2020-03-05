<?php

$this->breadcrumbs = array(
	$model->label(2) => array('admin'),
	Yii::t('app', 'Manager'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),	
);
?>

<h1><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'mb-cars-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'placa',
		'apelido',
		'marca',
		'modelo',
		array(
			'name' => 'ativo',
			'value' => '$data->ativo',
			'filter' => array('0' => 'NAO', '1' => 'SIM'),
		),
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>