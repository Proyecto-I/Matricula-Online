<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesor'=>array('admin'),
	$model->CODPROFESOR=>array('view','id'=>$model->IDPROFESOR),
	'Actualizar',
);

$this->menu=array(
	/* array('label'=>'List Profesor', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Profesor', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Ver Profesor', 'url'=>array('view', 'id'=>$model->IDPROFESOR), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrar Profesor', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1 class="page-header">Actualizar Profesor: <?php echo $model->CODPROFESOR; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>