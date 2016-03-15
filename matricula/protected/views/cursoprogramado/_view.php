<?php
/* @var $this CursoprogramadoController */
/* @var $data Cursoprogramado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDCURSO_PROG')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDCURSO_PROG), array('view', 'id'=>$data->IDCURSO_PROG)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDCURSO')); ?>:</b>
	<?php echo CHtml::encode($data->IDCURSO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDCICLO')); ?>:</b>
	<?php echo CHtml::encode($data->IDCICLO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPROFESOR')); ?>:</b>
	<?php echo CHtml::encode($data->IDPROFESOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VACANTES')); ?>:</b>
	<?php echo CHtml::encode($data->VACANTES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MATRICULADOS')); ?>:</b>
	<?php echo CHtml::encode($data->MATRICULADOS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HORARIO')); ?>:</b>
	<?php echo CHtml::encode($data->HORARIO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHAREGISTRO')); ?>:</b>
	<?php echo CHtml::encode($data->FECHAREGISTRO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO); ?>
	<br />

	*/ ?>

</div>