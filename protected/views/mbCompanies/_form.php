<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'mb-companies-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'cnpj'); ?>
		<?php echo $form->textField($model, 'cnpj', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'cnpj'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'razao_social'); ?>
		<?php echo $form->textField($model, 'razao_social', array('maxlength' => 40)); ?>
		<?php echo $form->error($model,'razao_social'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'endereco'); ?>
		<?php echo $form->textField($model, 'endereco', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'endereco'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model, 'email', array('maxlength' => 40)); ?>
		<?php echo $form->error($model,'email'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ativo'); ?>
		<?php echo $form->checkBox($model, 'ativo'); ?>
		<?php echo $form->error($model,'ativo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'telefone'); ?>
		<?php echo $form->textField($model, 'telefone', array('maxlength' => 40)); ?>
		<?php echo $form->error($model,'telefone'); ?>
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