<?php
/* @var $this CursoprogramadoController */
/* @var $model Cursoprogramado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDCURSO_PROG'); ?>
		<?php echo $form->textField($model,'IDCURSO_PROG',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDCURSO'); ?>
		<?php echo $form->textField($model,'IDCURSO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDCICLO'); ?>
		<?php echo $form->textField($model,'IDCICLO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDPROFESOR'); ?>
		<?php echo $form->textField($model,'IDPROFESOR',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDCARRERA'); ?>
		<?php echo $form->textField($model,'IDCARRERA',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDSECCION'); ?>
		<?php echo $form->textField($model,'IDSECCION',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VACANTES'); ?>
		<?php echo $form->textField($model,'VACANTES',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MATRICULADOS'); ?>
		<?php echo $form->textField($model,'MATRICULADOS',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HORARIO'); ?>
		<?php echo $form->textField($model,'HORARIO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHAREGISTRO'); ?>
		<?php echo $form->textField($model,'FECHAREGISTRO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ESTADO'); ?>
		<?php echo $form->textField($model,'ESTADO',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->