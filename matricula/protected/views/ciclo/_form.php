<?php
/* @var $this CicloController */
/* @var $model Ciclo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ciclo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CODCICLO'); ?>
		<?php echo $form->textField($model,'CODCICLO',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'CODCICLO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIPCION'); ?>
		<?php echo $form->textField($model,'DESCRIPCION',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'DESCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FEC_INICIO'); ?>
		<?php echo $form->textField($model,'FEC_INICIO'); ?>
		<?php echo $form->error($model,'FEC_INICIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FEC_TERMINO'); ?>
		<?php echo $form->textField($model,'FEC_TERMINO'); ?>
		<?php echo $form->error($model,'FEC_TERMINO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHAREGISTRO'); ?>
		<?php echo $form->textField($model,'FECHAREGISTRO'); ?>
		<?php echo $form->error($model,'FECHAREGISTRO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESTADO'); ?>
		<?php echo $form->textField($model,'ESTADO',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'ESTADO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->