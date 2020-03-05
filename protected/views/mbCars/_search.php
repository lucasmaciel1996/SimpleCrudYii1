<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'placa'); ?>
		<?php echo $form->textField($model, 'placa', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'apelido'); ?>
		<?php echo $form->textField($model, 'apelido', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'marca'); ?>
		<?php echo $form->textField($model, 'marca', array('maxlength' => 40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'modelo'); ?>
		<?php echo $form->textField($model, 'modelo', array('maxlength' => 40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ativo'); ?>
		<?php echo $form->dropDownList($model, 'ativo', array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'alterador'); ?>
		<?php echo $form->textField($model, 'alterador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'data_criacao'); ?>
		<?php echo $form->textField($model, 'data_criacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'data_alteracao'); ?>
		<?php echo $form->textField($model, 'data_alteracao'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
