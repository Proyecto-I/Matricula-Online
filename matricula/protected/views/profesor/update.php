<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesors'=>array('admin'),
	$model->IDPROFESOR=>array('view','id'=>$model->IDPROFESOR),
	'Update',
);

$this->menu=array(
	/* array('label'=>'List Profesor', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create Profesor', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> View Profesor', 'url'=>array('view', 'id'=>$model->IDPROFESOR), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Manage Profesor', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1>Update Profesor <?php echo $model->IDPROFESOR; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>