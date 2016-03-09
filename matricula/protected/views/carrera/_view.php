<?php
/* @var $this CarreraController */
/* @var $data Carrera */
?>

<div class="view">
	<div class="panel panel-default">
		<div class="panel-heading">
			<b><?php echo CHtml::encode($data->getAttributeLabel('CODIGO CARRERA')); ?>:</b>
			<?php echo CHtml::link(CHtml::encode($data->CODCARRERA), array('view', 'id'=>$data->IDCARRERA)); ?>
		</div>
		<div class="panel-body">			
			<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
			<?php echo CHtml::encode($data->DESCRIPCION); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA REGISTRO')); ?>:</b>
			<?php echo CHtml::encode($data->FECHAREGISTRO); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
			<?php echo CHtml::encode($data->ESTADO); ?>
			<br />
		</div>
	</div>
</div>