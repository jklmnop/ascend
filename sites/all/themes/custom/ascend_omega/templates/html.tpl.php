<?php print $doctype; ?>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>> <!--<![endif]-->
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?> 
    <?php $theme_path = drupal_get_path('theme', variable_get('theme_default', NULL)); ?>
    <link rel="shortcut icon" href="<?= $theme_path; ?>/favicon.ico" type="image/vnd.microsoft.icon" />
    <!-- For third-generation iPad with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= $theme_path; ?>/apple-touch-icon-144x144-precomposed.png">
    <!-- For iPhone with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= $theme_path; ?>/apple-touch-icon-114x114-precomposed.png">
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= $theme_path; ?>/apple-touch-icon-72x72-precomposed.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="<?= $theme_path; ?>/apple-touch-icon-precomposed.png">
  
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
    
  <?php print $page_top; ?>
  <?php print $page; ?>
    <div class="fine-print container-12 clearfix">
        <div class="copyright grid-6"><small><?php print(date('Y')); ?> &copy; Ascend Psychological Services, LLC.  All Rights Reserved.</small></div>
        <div class="site-by grid-6"><small>Site design by <a href="http://parachuteagency.com/" rel="nofollow" title="Parachute Agency">Parachute Agency</a></small></div>
    </div>
  <?php print $page_bottom; ?>
</body>
</html>