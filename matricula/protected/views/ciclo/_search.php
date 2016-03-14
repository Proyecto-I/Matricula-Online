<?php
/* @var $this CicloController */
/* @var $model Ciclo */
/* @var $form CActiveForm */
?>

<div class="wide form form-horizontal">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CODCICLO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3">
			<?php echo $form->textField($model,'CODCICLO',array('class'=>'form-control','size'=>8,'maxlength'=>8)); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCRIPCION',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'DESCRIPCION',array('class'=>'form-control','size'=>10,'maxlength'=>10)); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-offset-2 col-sm-10">
			<?php echo CHtml::submitButton('Buscar',array('class'=>'btn btn-primary')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->