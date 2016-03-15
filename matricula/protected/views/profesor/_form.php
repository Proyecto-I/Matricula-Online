<?php
/* @var $this ProfesorController */
/* @var $model Profesor */
/* @var $form CActiveForm */
?>

<div class="form form-horizontal">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note small">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'CODPROFESOR',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->textField($model,'CODPROFESOR',array('class'=>'form-control','size'=>8,'maxlength'=>8,'disabled'=>'true')); ?>
			<?php echo $form->error($model,'CODPROFESOR'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'APEPATERNO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'APEPATERNO',array('class'=>'form-control','size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'APEPATERNO'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'APEMATERNO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'APEMATERNO',array('class'=>'form-control','size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'APEMATERNO'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NOMBRES',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'NOMBRES',array('class'=>'form-control','size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'NOMBRES'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'DNI',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->textField($model,'DNI',array('class'=>'form-control','size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'DNI'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'DIRECCION',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'DIRECCION',array('class'=>'form-control','size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'DIRECCION'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'TELEFONO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->textField($model,'TELEFONO',array('class'=>'form-control','size'=>20,'maxlength'=>20)); ?>
			<?php echo $form->error($model,'TELEFONO'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'EMAIL',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'EMAIL',array('class'=>'form-control','size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'EMAIL'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'CLAVE',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->textField($model,'CLAVE',array('class'=>'form-control','size'=>20,'maxlength'=>20)); ?>
			<?php echo $form->error($model,'CLAVE'); ?>
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
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Grabar', array('class'=>'btn btn-primary')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->