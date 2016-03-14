<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesors'=>array('admin'),
	$model->IDPROFESOR,
);

$this->menu=array(
	array('label'=>'List Profesor', 'url'=>array('index')),
	array('label'=>'Create Profesor', 'url'=>array('create')),
	array('label'=>'Update Profesor', 'url'=>array('update', 'id'=>$model->IDPROFESOR)),
	array('label'=>'Delete Profesor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDPROFESOR),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Profesor', 'url'=>array('admin')),
);
?>

<h1>View Profesor #<?php echo $model->IDPROFESOR; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDPROFESOR',
		'CODPROFESOR',
		'APEPATERNO',
		'APEMATERNO',
		'NOMBRES',
		'DNI',
		'DIRECCION',
		'TELEFONO',
		'EMAIL',
		'CLAVE',
		'FECHAREGISTRO',
		'ESTADO',
	),
)); ?>
