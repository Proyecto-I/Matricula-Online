<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	$model->CODUSUARIO=>array('view','id'=>$model->IDUSUARIO),
	'Actualizar',
);

$this->menu=array(
	/* array('label'=>'List Usuario', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Usuario', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Ver Usuario', 'url'=>array('view', 'id'=>$model->IDUSUARIO), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrar Usuario', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1 class="page-header">Actualizar Usuario: <?php echo $model->CODUSUARIO; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>