<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carreras'=>array('index'),
	$model->CODCARRERA,
);

$this->menu=array(
	array('label'=>'List Carrera', 'url'=>array('index')),
	array('label'=>'Create Carrera', 'url'=>array('create')),
	array('label'=>'Update Carrera', 'url'=>array('update', 'id'=>$model->IDCARRERA)),
	array('label'=>'Delete Carrera', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDCARRERA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Carrera', 'url'=>array('admin')),
);
?>

<h3>Ver Carrera <?php echo $model->DESCRIPCION; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'htmlOptions'=>array("class"=>"table table-striped table-bordered"),
	'data'=>$model,
	'attributes'=>array(
		//'IDCARRERA',
		'CODCARRERA',
		'DESCRIPCION',
		'FECHAREGISTRO',
		'ESTADO',
	),
)); ?>
