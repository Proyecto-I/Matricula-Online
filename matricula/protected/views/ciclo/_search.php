<?php
/* @var $this CicloController */
/* @var $model Ciclo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDCICLO'); ?>
		<?php echo $form->textField($model,'IDCICLO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CODCICLO'); ?>
		<?php echo $form->textField($model,'CODCICLO',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCRIPCION'); ?>
		<?php echo $form->textField($model,'DESCRIPCION',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FEC_INICIO'); ?>
		<?php echo $form->textField($model,'FEC_INICIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FEC_TERMINO'); ?>
		<?php echo $form->textField($model,'FEC_TERMINO'); ?>
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