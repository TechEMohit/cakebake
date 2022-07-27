<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?= $this->fetch('title') ?>  </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <?= $this->Html->css("https://fonts.googleapis.com/css?family=Nunito:400,600,700") ?>
    <?= $this->Html->css("bootstrap/css/bootstrap.min.css") ?>
    <?= $this->Html->css("assets/css/plugins.css") ?>
    <?= $this->Html->css("assets/css/authentication/form-2.css") ?>
    <!-- END GLOBAL MANDATORY STYLES -->
    <?= $this->Html->css("assets/css/forms/switches.css") ?>
    <?= $this->Html->css("assets/css/forms/theme-checkbox-radio.css") ?>

    <?= $this->fetch('page-css') ?>
    
</head>
<body>

	<?= $this->element('header') ?>

	<!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
	   
	   <?= $this->element('sidebar') ?>

        <div id="content" class="main-content">
		 
          <?= $this->fetch('content') ?>
		 
           <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
        
        </div>
    </div>



	<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
	<?= $this->Html->script('js/libs/jquery-3.1.1.min.js') ?>
	<?= $this->Html->script('js/popper.min.js') ?>
	<?= $this->Html->script('js/bootstrap.min.js') ?>
	<?= $this->Html->script('perfect-scrollbar/perfect-scrollbar.min.js') ?>
	<?= $this->Html->script('js/app.js') ?>
	<?= $this->Html->script('js/custom.js') ?>
    
	<script>
        $(document).ready(function() {
            App.init();
        });
    </script>	

    <?= $this->fetch('page-js') ?>
    
</body>
</html>