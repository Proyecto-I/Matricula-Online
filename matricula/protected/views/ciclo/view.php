<?php
/* @var $this CicloController */
/* @var $model Ciclo */

$this->breadcrumbs=array(
	'Ciclos'=>array('index'),
	$model->IDCICLO,
);

$this->menu=array(
	array('label'=>'List Ciclo', 'url'=>array('index')),
	array('label'=>'Create Ciclo', 'url'=>array('create')),
	array('label'=>'Update Ciclo', 'url'=>array('update', 'id'=>$model->IDCICLO)),
	array('label'=>'Delete Ciclo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDCICLO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ciclo', 'url'=>array('admin')),
);
?>

<h1>View Ciclo #<?php echo $model->IDCICLO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDCICLO',
		'CODCICLO',
		'DESCRIPCION',
		'FEC_INICIO',
		'FEC_TERMINO',
		'FECHAREGISTRO',
		'ESTADO',
	),
)); ?>
