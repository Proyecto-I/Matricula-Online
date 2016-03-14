<?php
/* @var $this RolController */
/* @var $model Rol */

$this->breadcrumbs=array(
	'Rols'=>array('admin'),
	'Create',
);

$this->menu=array(
	/* array('label'=>'List Rol', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Manage Rol', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1>Create Rol</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>