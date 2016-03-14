<?php
/* @var $this CicloController */
/* @var $model Ciclo */

$this->breadcrumbs=array(
	'Ciclos'=>array('admin'),
	$model->CODCICLO,
);

$this->menu=array(
	/* array('label'=>'List Ciclo', 'url'=>array('index')),*/
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Ciclo', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Actualizar Ciclo', 'url'=>array('update', 'id'=>$model->IDCICLO), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar Ciclo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDCICLO),'confirm'=>'Are you sure you want to delete this item?'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrar Ciclo', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1 class="page-header">Datos del Ciclo: <?php echo $model->CODCICLO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'IDCICLO',
		'CODCICLO',
		'DESCRIPCION',
		'FEC_INICIO',
		'FEC_TERMINO',
		'FECHAREGISTRO',
		'ESTADO',
	),
)); ?>
