<?php
/* @var $this RolController */
/* @var $model Rol */

$this->breadcrumbs=array(
	'Roles'=>array('admin'),
	$model->CODROL,
);

$this->menu=array(
	/* array('label'=>'List Rol', 'url'=>array('index')),*/
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Rol', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Actualizar Rol', 'url'=>array('update', 'id'=>$model->IDROL), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar Rol', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDROL),'confirm'=>'Are you sure you want to delete this item?'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrar Rol', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1>Datos del Rol: <?php echo $model->CODROL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDROL',
		'CODROL',
		'NOMBRE',
		'DESCRIPCION',
		'FECHAREGISTRO',
		'ESTADO',
	),
)); ?>
