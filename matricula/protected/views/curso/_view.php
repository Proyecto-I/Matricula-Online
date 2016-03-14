<?php
/* @var $this CursoController */
/* @var $data Curso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDCURSO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDCURSO), array('view', 'id'=>$data->IDCURSO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODCURSO')); ?>:</b>
	<?php echo CHtml::encode($data->CODCURSO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREDITOS')); ?>:</b>
	<?php echo CHtml::encode($data->CREDITOS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHAREGISTRO')); ?>:</b>
	<?php echo CHtml::encode($data->FECHAREGISTRO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO); ?>
	<br />


</div>