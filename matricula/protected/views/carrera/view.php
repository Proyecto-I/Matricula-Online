<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carreras'=>array('admin'),
	$model->CODCARRERA,
);

$this->menu=array(
	/* array('label'=>'List Carrera', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create Carrera', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update Carrera', 'url'=>array('update', 'id'=>$model->IDCARRERA), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete Carrera', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDCARRERA),'confirm'=>'Are you sure you want to delete this item?'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Manage Carrera', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h3>Ver Carrera <?php echo $model->DESCRIPCION; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'IDCARRERA',
		'CODCARRERA',
		'DESCRIPCION',
		'FECHAREGISTRO',
		'ESTADO',
	),
)); ?>
