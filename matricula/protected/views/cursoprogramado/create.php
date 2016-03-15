<?php
/* @var $this CursoprogramadoController */
/* @var $model Cursoprogramado */

$this->breadcrumbs=array(
	'Programación de Curso'=>array('admin'),
	'Programar',
);

$this->menu=array(
	/* array('label'=>'List Cursoprogramado', 'url'=>array('index')),*/
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Cursos Programados', 'url'=>array('admin'),'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1 class="page-header">Programar Curso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>