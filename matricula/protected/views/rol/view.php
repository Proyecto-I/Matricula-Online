<?php
/* @var $this RolController */
/* @var $model Rol */

$this->breadcrumbs=array(
	'Rols'=>array('index'),
	$model->IDROL,
);

$this->menu=array(
	array('label'=>'List Rol', 'url'=>array('index')),
	array('label'=>'Create Rol', 'url'=>array('create')),
	array('label'=>'Update Rol', 'url'=>array('update', 'id'=>$model->IDROL)),
	array('label'=>'Delete Rol', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDROL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rol', 'url'=>array('admin')),
);
?>

<h1>View Rol #<?php echo $model->IDROL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDROL',
		'CODROL',
		'NOMBRE',
		'DESCRIPCION',
		'FECHAREGISTRO',
	),
)); ?>
