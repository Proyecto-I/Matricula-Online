<?php
/* @var $this CarreraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Carreras',
);

$this->menu=array(
	array('label'=>'Registrar Carrera', 'url'=>array('create')),
	array('label'=>'Administrar Carrera', 'url'=>array('admin')),
);
?>

<h1>Carreras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
