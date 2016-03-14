<?php
/* @var $this AlumnoController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('admin'),
	'Create',
);

$this->menu=array(
	/* array('label'=>'List Alumno', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrar Alumno', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1 class="page-header">Registrar Alumno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>