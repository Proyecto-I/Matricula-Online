<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesors'=>array('admin'),
	'Create',
);

$this->menu=array(
	/* array('label'=>'List Profesor', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Manage Profesor', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1>Create Profesor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>