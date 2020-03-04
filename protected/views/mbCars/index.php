<?php
/* @var $this MbCarsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mb Cars',
);

$this->menu=array(
	array('label'=>'Create MbCars', 'url'=>array('create')),
	array('label'=>'Manage MbCars', 'url'=>array('admin')),
);
?>

<h1>Mb Cars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
