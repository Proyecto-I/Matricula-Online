<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carreras'=>array('index'),
	$model->IDCARRERA=>array('view','id'=>$model->IDCARRERA),
	'Update',
);

$this->menu=array(
	array('label'=>'List Carrera', 'url'=>array('index')),
	array('label'=>'Create Carrera', 'url'=>array('create')),
	array('label'=>'View Carrera', 'url'=>array('view', 'id'=>$model->IDCARRERA)),
	array('label'=>'Manage Carrera', 'url'=>array('admin')),
);
?>

<h1>Update Carrera <?php echo $model->IDCARRERA; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>