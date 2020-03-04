<?php
/* @var $this MbCompaniesController */
/* @var $model MbCompanies */

$this->breadcrumbs=array(
	'Mb Companies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MbCompanies', 'url'=>array('index')),
	array('label'=>'Create MbCompanies', 'url'=>array('create')),
	array('label'=>'View MbCompanies', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MbCompanies', 'url'=>array('admin')),
);
?>

<h1>Update MbCompanies <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>