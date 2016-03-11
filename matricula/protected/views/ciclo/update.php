<?php
/* @var $this CicloController */
/* @var $model Ciclo */

$this->breadcrumbs=array(
	'Ciclos'=>array('index'),
	$model->IDCICLO=>array('view','id'=>$model->IDCICLO),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ciclo', 'url'=>array('index')),
	array('label'=>'Create Ciclo', 'url'=>array('create')),
	array('label'=>'View Ciclo', 'url'=>array('view', 'id'=>$model->IDCICLO)),
	array('label'=>'Manage Ciclo', 'url'=>array('admin')),
);
?>

<h1>Update Ciclo <?php echo $model->IDCICLO; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>