<?php
/* @var $this SeccionController */
/* @var $data Seccion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDSECCION')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDSECCION), array('view', 'id'=>$data->IDSECCION)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODSECCION')); ?>:</b>
	<?php echo CHtml::encode($data->CODSECCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHAREGISTRO')); ?>:</b>
	<?php echo CHtml::encode($data->FECHAREGISTRO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO); ?>
	<br />


</div>