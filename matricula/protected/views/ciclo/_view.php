<?php
/* @var $this CicloController */
/* @var $data Ciclo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDCICLO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDCICLO), array('view', 'id'=>$data->IDCICLO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODCICLO')); ?>:</b>
	<?php echo CHtml::encode($data->CODCICLO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FEC_INICIO')); ?>:</b>
	<?php echo CHtml::encode($data->FEC_INICIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FEC_TERMINO')); ?>:</b>
	<?php echo CHtml::encode($data->FEC_TERMINO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHAREGISTRO')); ?>:</b>
	<?php echo CHtml::encode($data->FECHAREGISTRO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO); ?>
	<br />


</div>