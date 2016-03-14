<?php
/* @var $this ProfesorController */
/* @var $data Profesor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPROFESOR')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDPROFESOR), array('view', 'id'=>$data->IDPROFESOR)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODPROFESOR')); ?>:</b>
	<?php echo CHtml::encode($data->CODPROFESOR); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIRECCION')); ?>:</b>
	<?php echo CHtml::encode($data->DIRECCION); ?>
	<br />

	<?php /*
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