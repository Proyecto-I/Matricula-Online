<?php
/* @var $this AlumnoController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('admin'),
	$model->CODALUMNO,
);

$this->menu=array(
	/* array('label'=>'List Alumno', 'url'=>array('index'), 'linkOptions'=>array('class'=>'btn-enlace')), */
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Alumno', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Actualizar Alumno', 'url'=>array('update', 'id'=>$model->IDALUMNO), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar Alumno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDALUMNO),'confirm'=>'Are you sure you want to delete this item?'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrar Alumno', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1 class="page-header">Datos del Alumno: <?php echo $model->CODALUMNO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'IDALUMNO',
		'IDCARRERA',
		'IDROL',
		'CODALUMNO',
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
