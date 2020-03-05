<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('placa')); ?>:
	<?php echo GxHtml::encode($data->placa); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('apelido')); ?>:
	<?php echo GxHtml::encode($data->apelido); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('marca')); ?>:
	<?php echo GxHtml::encode($data->marca); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('modelo')); ?>:
	<?php echo GxHtml::encode($data->modelo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ativo')); ?>:
	<?php echo GxHtml::encode($data->ativo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('alterador')); ?>:
	<?php echo GxHtml::encode($data->alterador); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('data_criacao')); ?>:
	<?php echo GxHtml::encode($data->data_criacao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data_alteracao')); ?>:
	<?php echo GxHtml::encode($data->data_alteracao); ?>
	<br />
	*/ ?>

</div>