<?php
/* @var $this CicloController */
/* @var $model Ciclo */

$this->breadcrumbs=array(
	'Ciclos'=>array('admin'),
	$model->CODCICLO=>array('view','id'=>$model->IDCICLO),
	'Actualizar',
);

$this->menu=array(
	/* array('label'=>'List Ciclo', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Ciclo', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Ver Ciclo', 'url'=>array('view', 'id'=>$model->IDCICLO), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrar Ciclo', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1 class="page-header">Actualizar Ciclo <?php echo $model->CODCICLO; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>