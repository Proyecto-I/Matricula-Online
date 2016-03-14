<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	$model->CODUSUARIO,
);

$this->menu=array(
	/* array('label'=>'List Usuario', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Usuario', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Actualizar Usuario', 'url'=>array('update', 'id'=>$model->IDUSUARIO), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDUSUARIO),'confirm'=>'Are you sure you want to delete this item?'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrar Usuario', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1 class="page-header">Datos del Usuario: <?php echo $model->CODUSUARIO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		/*'IDUSUARIO',*/
		'IDROL',
		'CODUSUARIO',
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
