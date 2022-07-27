<!DOCTYPE html>
<html>
<head>
	<title><?= $this->fetch('title') ?></title>
	   <!-- BEGIN GLOBAL MANDATORY STYLES -->
	    <?= $this->Html->css("https://fonts.googleapis.com/css?family=Nunito:400,600,700") ?>
	    <?= $this->Html->css("bootstrap/css/bootstrap.min.css") ?>
	    <?= $this->Html->css("assets/css/plugins.css") ?>
	    <?= $this->Html->css("assets/css/authentication/form-2.css") ?>
      <!-- END GLOBAL MANDATORY STYLES -->
	   <?= $this->Html->css("assets/css/forms/theme-checkbox-radio.css") ?>
	   <?= $this->Html->css("assets/css/forms/switches.css") ?>
</head>
<body>

	 <?= $this->fetch('content') ?>


  
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
	<?= $this->Html->script('js/libs/jquery-3.1.1.min.js') ?>
	<?= $this->Html->script('js/popper.min.js') ?>
	<?= $this->Html->script('js/bootstrap.min.js') ?>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
	<?= $this->Html->script('js/authentication/form-2.js') ?>


</body>
</html>