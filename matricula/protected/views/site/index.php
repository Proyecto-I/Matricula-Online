<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenido al <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<h2 class="control">Panel de Control</h2>

<div class="panel-control">
	<div class="color-swatch brand-primary">
		<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
		<span class="glyphicon-class">Alumno</span>
	</div>
	<div class="color-swatch brand-primary">
		<span class="glyphicon glyphicon-check" aria-hidden="true"></span>
		<span class="glyphicon-class">Carrera</span>
	</div>
	<div class="color-swatch brand-primary">
		<span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
		<span class="glyphicon-class">Ciclo</span>
	</div>
	<div class="color-swatch brand-primary">
		<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
		<span class="glyphicon-class">Curso</span>
	</div>
	<div class="color-swatch brand-primary">
		<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
		<span class="glyphicon-class">Profesor</span>
	</div>
	<div class="color-swatch brand-primary">
		<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
		<span class="glyphicon-class">Usuario</span>
	</div>
</div>
