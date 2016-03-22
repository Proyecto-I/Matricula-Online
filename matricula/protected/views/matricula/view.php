<?php
/* @var $this MatriculaController */
/* @var $model Matricula */

$this->breadcrumbs=array(
	'Matriculas'=>array('index'),
	$model->IDMATRICULA,
);

$this->menu=array(
	array('label'=>'List Matricula', 'url'=>array('index')),
	array('label'=>'Create Matricula', 'url'=>array('create')),
	array('label'=>'Update Matricula', 'url'=>array('update', 'id'=>$model->IDMATRICULA)),
	array('label'=>'Delete Matricula', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDMATRICULA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Matricula', 'url'=>array('admin')),
);
?>

<h1>View Matricula #<?php echo $model->IDMATRICULA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDMATRICULA',
		'CODMATRICULA',
		'IDCURSO_PROG',
		'IDALUMNO',
		'FEC_MATRICULA',
		'FECHAREGISTRO',
		'ESTADO',
	),
)); ?>
