<?php
/* @var $this MatriculaController */
/* @var $data Matricula */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDMATRICULA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDMATRICULA), array('view', 'id'=>$data->IDMATRICULA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODMATRICULA')); ?>:</b>
	<?php echo CHtml::encode($data->CODMATRICULA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDCURSO_PROG')); ?>:</b>
	<?php echo CHtml::encode($data->IDCURSO_PROG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDALUMNO')); ?>:</b>
	<?php echo CHtml::encode($data->IDALUMNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FEC_MATRICULA')); ?>:</b>
	<?php echo CHtml::encode($data->FEC_MATRICULA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHAREGISTRO')); ?>:</b>
	<?php echo CHtml::encode($data->FECHAREGISTRO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO); ?>
	<br />


</div>