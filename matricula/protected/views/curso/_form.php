<?php
/* @var $this CursoController */
/* @var $model Curso */
/* @var $form CActiveForm */
?>

<div class="form form-horizontal">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note small">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'CODCURSO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->textField($model,'CODCURSO',array('class'=>'form-control','size'=>8,'maxlength'=>8)); ?>
			<?php echo $form->error($model,'CODCURSO'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'DESCRIPCION',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'DESCRIPCION',array('class'=>'form-control','size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'DESCRIPCION'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'CREDITOS',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->textField($model,'CREDITOS',array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'CREDITOS'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'FECHAREGISTRO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<div class="input-group date" id="datetimepicker1">
				<?php echo $form->textField($model,'FECHAREGISTRO',array('class'=>'form-control')); ?>
				<span class="input-group-addon">
	                <span class="glyphicon glyphicon-calendar"></span>
	            </span>
				<?php echo $form->error($model,'FECHAREGISTRO'); ?>
			</div>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ESTADO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->dropDownList($model,'ESTADO',array('A'=>'Activo', 'I'=>'Inactivo'),array('class'=>'form-control','size'=>1,'maxlength'=>1)); ?>
			<?php echo $form->error($model,'ESTADO'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar', array('class'=>'btn btn-primary')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->