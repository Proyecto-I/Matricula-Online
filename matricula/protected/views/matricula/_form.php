<?php
/* @var $this MatriculaController */
/* @var $model Matricula */
/* @var $form CActiveForm */
?>

<div class="form form-horizontal">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'matricula-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note small">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'CODMATRICULA', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->textField($model,'CODMATRICULA',array('size'=>8,'maxlength'=>8)); ?>
			<?php echo $form->error($model,'CODMATRICULA'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDCURSO_PROG', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-5">
			<?php echo $form->dropDownList($model,'IDCURSO_PROG',$model->getMenuProg(),array('class'=>'form-control','empty'=>'Seleccione Programacion')); ?>
			<?php echo $form->error($model,'IDCURSO_PROG'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDALUMNO', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-5">
			<?php echo $form->dropDownList($model,'IDALUMNO',$model->getMenuAlumno(),array('class'=>'form-control','empty'=>'Seleccione Alumno')); ?>
			<?php echo $form->error($model,'IDALUMNO'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'FEC_MATRICULA', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<div class="input-group date" id="datetimepicker1">
				<?php echo $form->textField($model,'FEC_MATRICULA',array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'FEC_MATRICULA'); ?>
				<span class="input-group-addon">
	                <span class="glyphicon glyphicon-calendar"></span>
	            </span>
	        </div>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'FECHAREGISTRO', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<div class="input-group date" id="datetimepicker2">
				<?php echo $form->textField($model,'FECHAREGISTRO',array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'FECHAREGISTRO'); ?>
				<span class="input-group-addon">
	                <span class="glyphicon glyphicon-calendar"></span>
	            </span>
	        </div>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ESTADO', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->dropDownList($model,'ESTADO',array('A'=>'Activo', 'I'=>'Inactivo'),array('class'=>'form-control','size'=>1,'maxlength'=>1)); ?>
			<?php echo $form->error($model,'ESTADO'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar Matrícula' : 'Actualizar Matrícula', array("class"=>"btn btn-primary")); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->