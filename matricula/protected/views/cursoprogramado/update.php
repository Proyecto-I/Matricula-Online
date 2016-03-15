<?php
/* @var $this CursoprogramadoController */
/* @var $model Cursoprogramado */

$this->breadcrumbs=array(
	'Cursoprogramados'=>array('index'),
	$model->IDCURSO_PROG=>array('view','id'=>$model->IDCURSO_PROG),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cursoprogramado', 'url'=>array('index')),
	array('label'=>'Create Cursoprogramado', 'url'=>array('create')),
	array('label'=>'View Cursoprogramado', 'url'=>array('view', 'id'=>$model->IDCURSO_PROG)),
	array('label'=>'Manage Cursoprogramado', 'url'=>array('admin')),
);
?>

<h1>Update Cursoprogramado <?php echo $model->IDCURSO_PROG; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>