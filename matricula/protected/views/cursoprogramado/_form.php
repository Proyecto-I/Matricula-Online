<?php
/* @var $this CursoprogramadoController */
/* @var $model Cursoprogramado */
/* @var $form CActiveForm */
?>

<div class="form form-horizontal">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cursoprogramado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note small">Los campos com <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDCARRERA', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-5">
			<?php echo $form->dropDownList($model,'IDCARRERA',CHtml::listData(Carrera::model()->findAll(array('order' => 'descripcion ASC')), 'IDCARRERA','DESCRIPCION'),array('class'=>'form-control','empty'=>'Seleccione Carrera')); ?>
			<?php echo $form->error($model,'IDCARRERA'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDCICLO', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->dropDownList($model,'IDCICLO',CHtml::listData(Ciclo::model()->findAll(), 'IDCICLO', 'DESCRIPCION'),
				array('class'=>'form-control','empty'=>'Seleccione Ciclo',
					'ajax' => array(
						'type' => 'POST',
						'url' => CController::createUrl('curso/listadodinamico'),
						'update' => '#Cursoprogramado_IDCURSO',
						)
					)
				); ?>
			<?php echo $form->error($model,'IDCICLO'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDCURSO', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-5">
			<?php echo $form->dropDownList($model,'IDCURSO',array('Seleccione Curso')); ?>
			<?php echo $form->error($model,'IDCURSO'); ?>
		</div>
	</div>

	<!--<div class="form-group">
		<?php echo $form->labelEx($model,'IDCICLO', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->dropDownList($model,'IDCICLO',CHtml::listData(Ciclo::model()->findAll(), 'IDCICLO', 'DESCRIPCION'),array('class'=>'form-control','empty'=>'Seleccione Ciclo')); ?>
			<?php echo $form->error($model,'IDCICLO'); ?>
		</div>
	</div>-->

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDCURSO', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-5">
			<?php echo $form->dropDownList($model,'IDCURSO',CHtml::listData(Curso::model()->findAll(array('order' => 'descripcion ASC')), 'IDCURSO', 'DESCRIPCION'),array('class'=>'form-control','empty'=>'Seleccione Curso')); ?>
			<?php echo $form->error($model,'IDCURSO'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDPROFESOR', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-5">
			<?php echo $form->dropDownList($model,'IDPROFESOR',CHtml::listData(Profesor::model()->findAll(array('order' => 'nombres ASC')), 'IDPROFESOR', function($model) { return CHtml::encode($model->APEPATERNO . ' '. $model->APEMATERNO. ', '. $model->NOMBRES); }),array('class'=>'form-control','empty'=>'Seleccione Profesor')); ?>
			<?php echo $form->error($model,'IDPROFESOR'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDSECCION', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-5">
			<?php echo $form->dropDownList($model,'IDSECCION',CHtml::listData(Seccion::model()->findAll(array('order' => 'CODSECCION ASC')), 'IDSECCION','CODSECCION'),array('class'=>'form-control','empty'=>'Seleccione Sección')); ?>
			<?php echo $form->error($model,'IDSECCION'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'VACANTES', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->textField($model,'VACANTES',array('class'=>'form-control','size'=>3,'maxlength'=>3)); ?>
			<?php echo $form->error($model,'VACANTES'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'MATRICULADOS', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->textField($model,'MATRICULADOS',array('class'=>'form-control','size'=>3,'maxlength'=>3)); ?>
			<?php echo $form->error($model,'MATRICULADOS'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'HORARIO', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->textField($model,'HORARIO',array('class'=>'form-control','size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'HORARIO'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'FECHAREGISTRO', array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<div class="input-group date" id="datetimepicker1">
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
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar', array("class"=>"btn btn-primary")); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->