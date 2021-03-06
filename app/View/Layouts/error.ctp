<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset('utf-8'); ?>
    <?php echo $this->Html->meta('viewport','width=device-width, initial-scale=1.0'); ?>
    <?php echo $this->Html->meta('description','eic corporation app , service eic, platform eic , ivoire invest'); ?>
    <?php echo $this->Html->meta('author','eic corporation'); ?>
    <?php echo $this->Html->meta('keyword','dashboard eic corporation, platform'); ?>
    <?php echo $this->Html->meta('favicon.ico','/img/favicon.png',array('type' => 'icon')); ?> 
    <title>PlateFotrm | 404 Erreur</title>

    <!-- Bootstrap core CSS -->
    <?php echo $this->Html->css('bootstrap.min'); ?>
    <?php echo $this->Html->css('bootstrap-reset'); ?>
     <!--external css-->
    <?php echo $this->Html->css('assets/font-awesome/css/font-awesome'); ?>
    <?php echo $this->fetch('css'); ?>

    <!-- Custom styles for this template -->
    <?php echo $this->Html->css('style'); ?>
    <?php echo $this->Html->css('style-responsive'); ?>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
     <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <?php echo $this->Html->script('respond.min'); ?>
    <![endif]-->
</head>
<body>
  <body class="body-404">

    <div class="container">
        <?php echo $this->Session->flash(); ?>
	    <?php echo $this->fetch('content'); ?>
    </div>
		<div id="footer">
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
  </body>
</html>

