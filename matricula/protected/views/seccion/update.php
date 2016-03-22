<?php
/* @var $this SeccionController */
/* @var $model Seccion */

$this->breadcrumbs=array(
	'Seccions'=>array('index'),
	$model->IDSECCION=>array('view','id'=>$model->IDSECCION),
	'Update',
);

$this->menu=array(
	array('label'=>'List Seccion', 'url'=>array('index')),
	array('label'=>'Create Seccion', 'url'=>array('create')),
	array('label'=>'View Seccion', 'url'=>array('view', 'id'=>$model->IDSECCION)),
	array('label'=>'Manage Seccion', 'url'=>array('admin')),
);
?>

<h1>Update Seccion <?php echo $model->IDSECCION; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>