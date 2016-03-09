<?php
/* @var $this CarreraController */
/* @var $data Carrera */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDCARRERA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDCARRERA), array('view', 'id'=>$data->IDCARRERA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODCARRERA')); ?>:</b>
	<?php echo CHtml::encode($data->CODCARRERA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHAREGISTRO')); ?>:</b>
	<?php echo CHtml::encode($data->FECHAREGISTRO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO); ?>
	<br />


</div>