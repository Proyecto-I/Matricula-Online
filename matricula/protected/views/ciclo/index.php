<?php
/* @var $this CicloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ciclos',
);

$this->menu=array(
	array('label'=>'Create Ciclo', 'url'=>array('create')),
	array('label'=>'Manage Ciclo', 'url'=>array('admin')),
);
?>

<h1>Ciclos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
