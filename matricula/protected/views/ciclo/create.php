<?php
/* @var $this CicloController */
/* @var $model Ciclo */

$this->breadcrumbs=array(
	'Ciclos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ciclo', 'url'=>array('index')),
	array('label'=>'Manage Ciclo', 'url'=>array('admin')),
);
?>

<h1>Create Ciclo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>