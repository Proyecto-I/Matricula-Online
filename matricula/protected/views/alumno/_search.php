<?php
/* @var $this AlumnoController */
/* @var $model Alumno */
/* @var $form CActiveForm */
?>

<div class="wide form form-horizontal">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'CODALUMNO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->textField($model,'CODALUMNO',array('class'=>'form-control','size'=>8,'maxlength'=>8)); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'APEPATERNO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'APEPATERNO',array('class'=>'form-control','size'=>50,'maxlength'=>50)); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'APEMATERNO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'APEMATERNO',array('class'=>'form-control','size'=>50,'maxlength'=>50)); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'NOMBRES',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'NOMBRES',array('class'=>'form-control','size'=>50,'maxlength'=>50)); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'DNI',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->textField($model,'DNI',array('class'=>'form-control','size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<?php echo CHtml::submitButton('Buscar', array("class"=>"btn btn-primary")); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->