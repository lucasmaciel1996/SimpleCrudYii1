<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('cnpj')); ?>:
	<?php echo GxHtml::encode($data->cnpj); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('razao_social')); ?>:
	<?php echo GxHtml::encode($data->razao_social); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('endereco')); ?>:
	<?php echo GxHtml::encode($data->endereco); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ativo')); ?>:
	<?php echo GxHtml::encode($data->ativo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('telefone')); ?>:
	<?php echo GxHtml::encode($data->telefone); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('alterador')); ?>:
	<?php echo GxHtml::encode($data->alterador); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data_criacao')); ?>:
	<?php echo GxHtml::encode($data->data_criacao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data_alteracao')); ?>:
	<?php echo GxHtml::encode($data->data_alteracao); ?>
	<br />
	*/ ?>

</div>