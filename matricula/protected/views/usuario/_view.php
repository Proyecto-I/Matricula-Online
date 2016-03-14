<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDUSUARIO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDUSUARIO), array('view', 'id'=>$data->IDUSUARIO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDROL')); ?>:</b>
	<?php echo CHtml::encode($data->IDROL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODUSUARIO')); ?>:</b>
	<?php echo CHtml::encode($data->CODUSUARIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APEPATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->APEPATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APEMATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->APEMATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRES')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DNI')); ?>:</b>
	<?php echo CHtml::encode($data->DNI); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CARGO')); ?>:</b>
	<?php echo CHtml::encode($data->CARGO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIRECCION')); ?>:</b>
	<?php echo CHtml::encode($data->DIRECCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->TELEFONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CLAVE')); ?>:</b>
	<?php echo CHtml::encode($data->CLAVE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHAREGISTRO')); ?>:</b>
	<?php echo CHtml::encode($data->FECHAREGISTRO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO); ?>
	<br />

	*/ ?>

</div>