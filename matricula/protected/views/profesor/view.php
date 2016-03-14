<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesor'=>array('admin'),
	$model->CODPROFESOR,
);

$this->menu=array(
	/* array('label'=>'List Profesor', 'url'=>array('index')),*/
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Profesor', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Actualizar Profesor', 'url'=>array('update', 'id'=>$model->IDPROFESOR), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar Profesor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDPROFESOR),'confirm'=>'Are you sure you want to delete this item?'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrar Profesor', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1 class="page-header">Datos del Profesor: <?php echo $model->CODPROFESOR; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'IDPROFESOR',
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
