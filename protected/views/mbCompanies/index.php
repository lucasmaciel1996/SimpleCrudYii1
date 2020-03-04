<?php
/* @var $this MbCompaniesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mb Companies',
);

$this->menu=array(
	array('label'=>'Create MbCompanies', 'url'=>array('create')),
	array('label'=>'Manage MbCompanies', 'url'=>array('admin')),
);
?>

<h1>Mb Companies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
