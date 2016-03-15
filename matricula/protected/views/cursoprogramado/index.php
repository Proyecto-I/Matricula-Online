<?php
/* @var $this CursoprogramadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cursoprogramados',
);

$this->menu=array(
	array('label'=>'Create Cursoprogramado', 'url'=>array('create')),
	array('label'=>'Manage Cursoprogramado', 'url'=>array('admin')),
);
?>

<h1>Cursoprogramados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
