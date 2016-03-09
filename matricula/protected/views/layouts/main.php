<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema de Matrícula Online">
    <meta name="author" content="AMR Software Solution">
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/ico/favicon.png">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<!-- Bootstrap core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/offcanvas.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/estilos.css" rel="stylesheet">

	<!-- blueprint CSS framework -->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">-->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker({
            	locale: 'es',
            	format: 'DD/MM/YYYY',
            });
        });
    </script>
</head>

<body>
	<!-- header -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
	          	<a class="navbar-brand" href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo-utp.png"></a>
	        </div>

		    <div id="navbar" class="collapse navbar-collapse navbar-right">
				<?php $this->widget('zii.widgets.CMenu',array(
					'encodeLabel' => false,
					'activeCssClass'=>'active',
  					'activateParents'=>true,
					'htmlOptions'=>array("class"=>"nav navbar-nav"),
					'submenuHtmlOptions'=>array("class"=>"dropdown-menu"),
					'items'=>array(
						array(
							'label'=>'Inicio',
							'url'=>array('/site/index')
						),
						array(
							'label'=>'Mantenimiento <span class="caret"></span>',
							'url'=>array('#'),
							'linkOptions'=>array('class'=>'dropdown-toggle', 'data-toggle'=>'dropdown', 'role'=>'button', 'aria-haspopup'=>'true', 'aria-expanded'=>'false'),
					      	'itemOptions'=>array('class'=>'dropdown'),

					      	'items'=>array(
					        	array('label'=>'Usuario', 'url'=>array('/usuario/index')),
					        	array('label'=>'Carrera', 'url'=>array('/carrera/index')),
					        	array('label'=>'Profesor', 'url'=>array('/change/responsibility')),
					        	array('label'=>'Profesor', 'url'=>array('/change/responsibility')),
					      	),
						),

						array(
							'label'=>'About',
							'url'=>array('/site/page',
							'view'=>'about')
						),
						array(
							'label'=>'Contact',
							'url'=>array('/site/contact')
						),
						array(
							'label'=>'Login', 
							'url'=>array('/site/login'), 
							'visible'=>Yii::app()->user->isGuest),
						array(
							'label'=>'Logout ('.Yii::app()->user->name.')', 
							'url'=>array('/site/logout'), 
							'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
			</div>
		</div>
	</nav>
	<!-- fin header -->

	<!-- contenido -->
	<div class="container">
		<div class="row row-offcanvas row-offcanvas-left">
			<div class="col-xs-6 col-sm-2 sidebar-offcanvas" id="sidebar">
				<div class="perfil text-center">
					<img src="img/foto.png" alt="" class="img-circle">
					<h3>ADMINISTRADOR</h3>
					<p>Usuario:<br><span>Maritza Milla Tarazona</span></p>
					<p>Último Acceso<br> <span>27-01-2016</span></p>
				</div>
	        </div><!--/.sidebar-offcanvas-->
			<div class="col-xs-12 col-sm-10">
				<?php if(isset($this->breadcrumbs)):?>
					<?php $this->widget('zii.widgets.CBreadcrumbs', array(
						'htmlOptions'=>array("class"=>"breadcrumb"),
						'links'=>$this->breadcrumbs,
					)); ?><!-- breadcrumbs -->
				<?php endif?>

				<?php echo $content; ?>
			</div>
		</div>
	</div>
	<!-- fin contenido -->
	<div class="clear"></div>

	<!-- footer -->
	<footer class="footer">
      <div class="container">
        <p class="text-muted text-center">
        	Copyright &copy; <?php echo date('Y'); ?> UTP. Todos los Derechos Reservados.<br/>
        </p>
      </div>
    </footer>
	<!-- footer -->

		<!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/moment-with-locales.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-datetimepicker.min.js"></script>
	    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/offcanvas.js"></script>

</body>
</html>
