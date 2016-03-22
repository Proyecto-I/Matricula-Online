<?php
/* @var $this MatriculaController */
/* @var $model Matricula */

$this->breadcrumbs=array(
	'Matriculas'=>array('index'),
	$model->IDMATRICULA=>array('view','id'=>$model->IDMATRICULA),
	'Update',
);

$this->menu=array(
	array('label'=>'List Matricula', 'url'=>array('index')),
	array('label'=>'Create Matricula', 'url'=>array('create')),
	array('label'=>'View Matricula', 'url'=>array('view', 'id'=>$model->IDMATRICULA)),
	array('label'=>'Manage Matricula', 'url'=>array('admin')),
);
?>

<h1>Update Matricula <?php echo $model->IDMATRICULA; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>