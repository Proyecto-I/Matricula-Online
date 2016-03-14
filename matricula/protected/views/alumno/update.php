<?php
/* @var $this AlumnoController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('admin'),
	$model->CODALUMNO=>array('view','id'=>$model->IDALUMNO),
	'Actualizar',
);

$this->menu=array(
	/* array('label'=>'List Alumno', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Alumno', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Ver Alumno', 'url'=>array('view', 'id'=>$model->IDALUMNO), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrar Alumno', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1 class="page-header">Actualizar Alumno: <?php echo $model->CODALUMNO; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>