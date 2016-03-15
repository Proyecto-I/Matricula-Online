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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/moment-with-locales.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/offcanvas.js"></script>

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
            $('#datetimepicker2').datetimepicker({
            	locale: 'es',
            	format: 'DD/MM/YYYY',
            });
            $('#datetimepicker3').datetimepicker({
            	locale: 'es',
            	format: 'DD/MM/YYYY',
            });
        });
    </script>
</head>

<body>

	<!-- contenido -->
	<?php echo $content; ?>
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



</body>
</html>
