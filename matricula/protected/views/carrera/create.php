<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carreras'=>array('admin'),
	'Registrar',
);

$this->menu=array(
	/* array('label'=>'Listar Carrera', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrar Carrera', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1>Registrar Carrera</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>