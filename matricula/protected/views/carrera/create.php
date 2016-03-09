<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carreras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Carrera', 'url'=>array('index')),
	array('label'=>'Administrar Carrera', 'url'=>array('admin')),
);
?>

<h1>Create Carrera</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>