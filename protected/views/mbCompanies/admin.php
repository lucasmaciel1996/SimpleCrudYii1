<?php

$this->breadcrumbs = array(
	$model->label(2) => array('admin'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	);
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'mb-companies-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'cnpj',
		'razao_social',
		'endereco',
		'email',
		array(
			'name' => 'ativo',
			'value' => '($data->ativo === 0) ? NAO : SIM',
			'filter' => array('0' => 'NAO', '1' => 'SIM'),
		),
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>