<?php
/* @var $this CursoprogramadoController */
/* @var $model Cursoprogramado */

$this->breadcrumbs=array(
	'Programación de Curso'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	/* array('label'=>'List Cursoprogramado', 'url'=>array('index')),*/
	array('label'=>'<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Programar Curso', 'url'=>array('create'),'linkOptions'=>array('class'=>'btn-enlace')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cursoprogramado-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 class="page-header">Programación de Cursos</h1>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cursoprogramado-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'IDCURSO_PROG',
		'IDCURSO',
		'IDCICLO',
		'IDPROFESOR',
		'VACANTES',
		'MATRICULADOS',
		/*
		'HORARIO',
		'FECHAREGISTRO',
		'ESTADO',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
