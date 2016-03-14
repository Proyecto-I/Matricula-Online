<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	'Registrar',
);

$this->menu=array(
	/* array('label'=>'List Usuario', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrar Usuario', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1 class="page-header">Registrar Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>