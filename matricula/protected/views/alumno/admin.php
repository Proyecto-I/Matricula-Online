<?php
/* @var $this AlumnoController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	/* array('label'=>'List Alumno', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Alumno', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#alumno-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 class="page-header">Administrar Alumnos</h1>

<?php echo CHtml::link('<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'alumno-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'IDALUMNO',
		//'IDCARRERA',
		//'IDROL',
		'CODALUMNO',
		'APEPATERNO',
		'APEMATERNO',
		'NOMBRES',
		'DNI',
		/*
		'DIRECCION',
		'TELEFONO',
		'EMAIL',
		'CLAVE',
		'FECHAREGISTRO',
		'ESTADO',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
