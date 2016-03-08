<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDUSUARIO'); ?>
		<?php echo $form->textField($model,'IDUSUARIO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDROL'); ?>
		<?php echo $form->textField($model,'IDROL',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CODUSUARIO'); ?>
		<?php echo $form->textField($model,'CODUSUARIO',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APEPATERNO'); ?>
		<?php echo $form->textField($model,'APEPATERNO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APEMATERNO'); ?>
		<?php echo $form->textField($model,'APEMATERNO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMBRES'); ?>
		<?php echo $form->textField($model,'NOMBRES',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DNI'); ?>
		<?php echo $form->textField($model,'DNI',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CARGO'); ?>
		<?php echo $form->textField($model,'CARGO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DIRECCION'); ?>
		<?php echo $form->textField($model,'DIRECCION',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TELEFONO'); ?>
		<?php echo $form->textField($model,'TELEFONO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMAIL'); ?>
		<?php echo $form->textField($model,'EMAIL',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CLAVE'); ?>
		<?php echo $form->textField($model,'CLAVE',array('size'=>20,'maxlength'=>20)); ?>
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