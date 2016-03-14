<?php
/* @var $this CicloController */
/* @var $model Ciclo */

$this->breadcrumbs=array(
	'Ciclos'=>array('admin'),
	'Registrar',
);

$this->menu=array(
	/* array('label'=>'List Ciclo', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrar Ciclo', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1 class="page-header">Registrar Ciclo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>