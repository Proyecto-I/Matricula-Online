<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	/* array('label'=>'List Usuario', 'url'=>array('index')), */
	array('label'=>'<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Usuario', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn-enlace')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 class="page-header">Administrar Usuarios</h1>

<?php echo CHtml::link('<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'IDUSUARIO',
		'IDROL',
		'CODUSUARIO',
		'APEPATERNO',
		'APEMATERNO',
		'NOMBRES',
		'DNI',
		/*
		'CARGO',
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
