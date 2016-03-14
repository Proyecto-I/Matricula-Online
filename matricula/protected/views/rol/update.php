<?php
/* @var $this RolController */
/* @var $model Rol */

$this->breadcrumbs=array(
	'Roles'=>array('index'),
	$model->CODROL=>array('view','id'=>$model->IDROL),
	'Actualizar',
);

$this->menu=array(
	/* array('label'=>'List Rol', 'url'=>array('index')),*/
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Rol', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Ver Rol', 'url'=>array('view', 'id'=>$model->IDROL), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrar Rol', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1 class="page-header">Update Rol <?php echo $model->IDROL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>