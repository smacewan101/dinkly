<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <title><?php echo Dinkly::getConfigValue('app_name'); ?> v<?php echo Dinkly::getConfigValue('dinkly_version', 'global'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="/css/bootstrap-theme.css" rel="stylesheet">
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/dinkly.css" rel="stylesheet">
    <style>
      body { padding-top: 60px; /* 60px to make the container go all the way
      to the bottom of the topbar */ }
    </style>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
    
    <script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>

    <?php echo $this->getModuleHeader(); ?>
  </head>
  <body>
  </div>
    <div class="container"><!-- Primary Container -->
    <?php if(Dinkly::getCurrentEnvironment() == 'dev'): ?>
      <!-- Handy Dev Mode Info Label -->
      <h3 class="dev-mode-indicator-label">
        <span class="label label-warning">
        Dev Mode
        </span>
      </h3>
      <h3 class="dev-mode-info-label">
        <span class="label label-info">
        <?php echo $this->getCurrentModule(); ?> -> <?php echo $this->getCurrentView(); ?>
        </span>
      </h3>
    <?php endif; ?>