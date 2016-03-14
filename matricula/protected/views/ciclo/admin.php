<?php
/* @var $this CicloController */
/* @var $model Ciclo */

$this->breadcrumbs=array(
	'Ciclos'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	/* array('label'=>'List Ciclo', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Ciclo', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ciclo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 class="page-header">Administrar Ciclos</h1>

<?php echo CHtml::link('<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ciclo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'IDCICLO',
		'CODCICLO',
		'DESCRIPCION',
		'FEC_INICIO',
		'FEC_TERMINO',
		//'FECHAREGISTRO',
		/*
		'ESTADO',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
