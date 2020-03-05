<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'mb-cars-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'placa'); ?>
		<?php echo $form->textField($model, 'placa', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'placa'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'apelido'); ?>
		<?php echo $form->textField($model, 'apelido', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'apelido'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'marca'); ?>
		<?php echo $form->textField($model, 'marca', array('maxlength' => 40)); ?>
		<?php echo $form->error($model,'marca'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'modelo'); ?>
		<?php echo $form->textField($model, 'modelo', array('maxlength' => 40)); ?>
		<?php echo $form->error($model,'modelo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ativo'); ?>
		<?php echo $form->checkBox($model, 'ativo'); ?>
		<?php echo $form->error($model,'ativo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'alterador'); ?>
		<?php echo $form->textField($model, 'alterador'); ?>
		<?php echo $form->error($model,'alterador'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'data_criacao'); ?>
		<?php echo $form->textField($model, 'data_criacao'); ?>
		<?php echo $form->error($model,'data_criacao'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'data_alteracao'); ?>
		<?php echo $form->textField($model, 'data_alteracao'); ?>
		<?php echo $form->error($model,'data_alteracao'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->