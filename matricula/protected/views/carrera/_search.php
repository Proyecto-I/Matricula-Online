<?php
/* @var $this CarreraController */
/* @var $model Carrera */
/* @var $form CActiveForm */
?>

<div class="wide form form-horizontal">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'CODCARRERA',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->textField($model,'CODCARRERA',array('class'=>'form-control','size'=>8,'maxlength'=>8)); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'DESCRIPCION',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'DESCRIPCION',array('class'=>'form-control','size'=>60,'maxlength'=>100)); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'FECHAREGISTRO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->textField($model,'FECHAREGISTRO',array('class'=>'form-control')); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'ESTADO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->textField($model,'ESTADO',array('class'=>'form-control','size'=>1,'maxlength'=>1)); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<?php echo CHtml::submitButton('Buscar',array('class'=>'btn btn-primary')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->