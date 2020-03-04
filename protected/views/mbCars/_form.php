<?php
/* @var $this MbCarsController */
/* @var $model MbCars */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mb-cars-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'placa'); ?>
		<?php echo $form->textField($model,'placa',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'placa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apelido'); ?>
		<?php echo $form->textField($model,'apelido',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'apelido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marca'); ?>
		<?php echo $form->textField($model,'marca',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'marca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modelo'); ?>
		<?php echo $form->textField($model,'modelo',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ativo'); ?>
		<?php echo $form->textField($model,'ativo'); ?>
		<?php echo $form->error($model,'ativo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alterador'); ?>
		<?php echo $form->textField($model,'alterador'); ?>
		<?php echo $form->error($model,'alterador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_criacao'); ?>
		<?php echo $form->textField($model,'data_criacao'); ?>
		<?php echo $form->error($model,'data_criacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_alteracao'); ?>
		<?php echo $form->textField($model,'data_alteracao'); ?>
		<?php echo $form->error($model,'data_alteracao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->