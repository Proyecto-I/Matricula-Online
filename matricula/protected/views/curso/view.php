<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	$model->IDCURSO,
);

$this->menu=array(
	/* array('label'=>'List Curso', 'url'=>array('index')),*/
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Curso', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Actualizar Curso', 'url'=>array('update', 'id'=>$model->IDCURSO), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar Curso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDCURSO),'confirm'=>'Are you sure you want to delete this item?'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrar Curso', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1>View Curso #<?php echo $model->IDCURSO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDCURSO',
		'CODCURSO',
		'DESCRIPCION',
		'CREDITOS',
		'FECHAREGISTRO',
		'ESTADO',
	),
)); ?>
