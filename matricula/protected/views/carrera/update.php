<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carreras'=>array('admin'),
	$model->CODCARRERA=>array('view','id'=>$model->IDCARRERA),
	'Actualizar',
);

$this->menu=array(
	/* array('label'=>'Listar Carrera', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Carrera', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Ver Carrera', 'url'=>array('view', 'id'=>$model->IDCARRERA), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrar Carrera', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h3>Actualizar Carrera: <?php echo $model->CODCARRERA; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>