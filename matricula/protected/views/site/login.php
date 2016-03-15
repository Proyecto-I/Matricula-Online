<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
?>


<div class="form form-signin">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<h1><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo-login.png"></h1>

	<h2 class="form-signin-heading text-center">Bienvenido a la intranet UTP.<br/>Por favor ingrese sus datos de acceso:</h2>

	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->

	<div class="form-group">
		<?php echo $form->labelEx($model,'username', array('class'=>'sr-only')); ?>
		<?php echo $form->textField($model,'username', array('class'=>'form-control input-lg','placeholder'=>'Usuario')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password', array('class'=>'sr-only')); ?>
		<?php echo $form->passwordField($model,'password', array('class'=>'form-control input-lg','placeholder'=>'Contraseña')); ?>
		<?php echo $form->error($model,'password'); ?>

		<!--<p class="hint">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p>-->
	</div>

	<!--<div class="form-group rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>-->

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Iniciar Sesión', array('class'=>'btn btn-lg btn-login btn-block')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
