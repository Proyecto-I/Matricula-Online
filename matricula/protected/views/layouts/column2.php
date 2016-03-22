<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<!-- header -->
<header id="cabecera-principal">  
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-xs-3">
					<div class="logo-principal">
						<a class="navbar-brand text-center" href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/utplogo.png"></a>
					</div>
				</div>
				<div class="col-xs-9">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				            <span class="sr-only">Toggle navigation</span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				        </button>		          	
			        </div>

			        <div class="menu-principal">
					    <div id="navbar" class="collapse navbar-collapse navbar-right">
							<?php $this->widget('zii.widgets.CMenu',array(
								'encodeLabel' => false,
								'activeCssClass'=>'active',
			  					'activateParents'=>true,
								'htmlOptions'=>array("class"=>"nav navbar-nav"),
								'submenuHtmlOptions'=>array("class"=>"dropdown-menu menu-secundario"),
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
								      		array('label'=>'Alumno', 'url'=>array('/alumno/admin')),
								        	array('label'=>'Carrera', 'url'=>array('/carrera/admin')),
								        	array('label'=>'Ciclo', 'url'=>array('/ciclo/admin')),
								        	array('label'=>'Curso', 'url'=>array('/curso/admin')),
								        	array('label'=>'Sección', 'url'=>array('/seccion/admin')),
								        	array('label'=>'Profesor', 'url'=>array('/profesor/admin')),
								        	array('label'=>'Rol', 'url'=>array('/rol/admin')),
								        	array('label'=>'Usuario', 'url'=>array('/usuario/admin')),
								      	),
									),

									array(
										'label'=>'Programación de Curso',
										'url'=>array('/cursoprogramado/index',
										'view'=>'about')
									),
									array(
										'label'=>'Matrícula',
										'url'=>array('/site/page',
										'view'=>'about')
									),
									/*array(
										'label'=>'Contact',
										'url'=>array('/site/contact')
									),*/
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
				</div>

			</div>
			
		</div>
	</nav>
</header>
<!-- fin header -->

<!-- contenido -->
<div class="container">
	<div class="row row-offcanvas row-offcanvas-left">
		<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
			<div class="perfil text-center">
				<img src="http://demo.neontheme.com/assets/images/thumb-1@2x.png" alt="" class="img-circle">
				<p>Bienvenido</p>
				<h2 class="name-user">Maritza Milla Tarazona</h2>
				<h3>ADMINISTRADOR</h3>
				<p>Último Acceso: <span><?php echo date('d-m-y'); ?></span></p>
			</div>
	    </div><!--/.sidebar-offcanvas-->
		<div class="col-xs-12 col-sm-9">
			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'htmlOptions'=>array("class"=>"breadcrumb"),
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<?php endif?>

			<div class="col-xs-12 col-sm-12">
				<p class="pull-left visible-xs">
			    	<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Perfil</button>
			  	</p>

				<div id="sidebar">
				<?php
					$this->beginWidget('zii.widgets.CPortlet', array(
						'title'=>'',
					));
					$this->widget('zii.widgets.CMenu', array(
						'encodeLabel' => false,
						'items'=>$this->menu,
						'htmlOptions'=>array('class'=>'nav nav-pills'),
					));
					$this->endWidget();
				?>
				</div><!-- sidebar -->


				<div id="content">
					<?php echo $content; ?>
				</div><!-- content -->
			</div>
		</div>
	</div>
</div>
<!-- fin contenido -->

<?php $this->endContent(); ?>