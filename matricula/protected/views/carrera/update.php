<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carreras'=>array('index'),
	$model->CODCARRERA=>array('view','id'=>$model->IDCARRERA),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Carrera', 'url'=>array('index')),
	array('label'=>'Registrar Carrera', 'url'=>array('create')),
	array('label'=>'Ver Carrera', 'url'=>array('view', 'id'=>$model->IDCARRERA)),
	array('label'=>'Administrar Carrera', 'url'=>array('admin')),
);
?>

<h3>Actualizar Carrera: <?php echo $model->CODCARRERA; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>