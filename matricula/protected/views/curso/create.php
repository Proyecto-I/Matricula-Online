<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	'Cursos'=>array('admin'),
	'Registrar',
);

$this->menu=array(
	/* array('label'=>'List Curso', 'url'=>array('index')),*/
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrar Curso', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1 class="page-header">Registrar Curso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>