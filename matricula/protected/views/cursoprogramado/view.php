<?php
/* @var $this CursoprogramadoController */
/* @var $model Cursoprogramado */

$this->breadcrumbs=array(
	'Cursoprogramados'=>array('admin'),
	$model->IDCURSO_PROG,
);

$this->menu=array(
	/*array('label'=>'List Cursoprogramado', 'url'=>array('index')),*/
	array('label'=>'Create Cursoprogramado', 'url'=>array('create')),
	array('label'=>'Update Cursoprogramado', 'url'=>array('update', 'id'=>$model->IDCURSO_PROG)),
	array('label'=>'Delete Cursoprogramado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDCURSO_PROG),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cursoprogramado', 'url'=>array('admin')),
);
?>

<h1>View Cursoprogramado #<?php echo $model->IDCURSO_PROG; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDCURSO_PROG',
		'IDCURSO',
		'IDCICLO',
		'IDPROFESOR',
		'IDCARRERA',
		'IDSECCION',
		'VACANTES',
		'MATRICULADOS',
		'HORARIO',
		'FECHAREGISTRO',
		'ESTADO',
	),
)); ?>
