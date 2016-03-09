<?php
/* @var $this CarreraController */
/* @var $model Carrera */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carrera-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CODCARRERA'); ?>
		<?php echo $form->textField($model,'CODCARRERA',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'CODCARRERA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIPCION'); ?>
		<?php echo $form->textField($model,'DESCRIPCION',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'DESCRIPCION'); ?>
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