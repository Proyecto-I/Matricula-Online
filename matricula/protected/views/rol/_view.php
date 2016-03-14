<?php
/* @var $this RolController */
/* @var $data Rol */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDROL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDROL), array('view', 'id'=>$data->IDROL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODROL')); ?>:</b>
	<?php echo CHtml::encode($data->CODROL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHAREGISTRO')); ?>:</b>
	<?php echo CHtml::encode($data->FECHAREGISTRO); ?>
	<br />


</div>