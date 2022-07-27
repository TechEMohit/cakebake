<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	  <title><?= $this->fetch('title') ?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
      <meta name="description" content="This is meta description">
      <meta name="author" content="Themefisher">
      <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
      <link rel="icon" href="images/favicon.png" type="image/x-icon">
      <!-- # Google Fonts -->
      <?= $this->Html->css("https://fonts.googleapis.com") ?>
      <?= $this->Html->css("https://fonts.gstatic.com") ?>
      <?= $this->Html->css("https://fonts.googleapis.com/css2?family=Neuton:wght@700&family=Work+Sans:wght@400;500;600;700&display=swap") ?>
      <!-- # CSS Plugins -->
      <?= $this->Html->css("website/bootstrap.min.css") ?>
      <!-- # Main Style Sheet -->
      <?= $this->Html->css("website/style.css") ?>
      
</head>
<body>

      <?= $this->element('webhead') ?>
	 
       <?= $this->fetch('content') ?>
      
      <?= $this->element('webfooter') ?>

	<!-- # JS Plugins -->
	<?= $this->Html->script('jquery/jquery.min.js') ?>
	<?= $this->Html->script('bootstrap.min.js') ?>
	<!-- Main Script -->
	<?= $this->Html->script('script.js') ?>
</body>
</html>