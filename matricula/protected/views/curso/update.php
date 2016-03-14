<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	'Cursos'=>array('admin'),
	$model->IDCURSO=>array('view','id'=>$model->IDCURSO),
	'Update',
);

$this->menu=array(
	/* array('label'=>'List Curso', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create Curso', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> View Curso', 'url'=>array('view', 'id'=>$model->IDCURSO), 'linkOptions'=>array('class'=>'btn-enlace')),
	array('label'=>'<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Manage Curso', 'url'=>array('admin'), 'linkOptions'=>array('class'=>'btn-enlace')),
);
?>

<h1>Update Curso <?php echo $model->IDCURSO; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>