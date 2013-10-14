<?php print $doctype; ?>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>> <!--<![endif]-->
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?> 
    <?php $theme_path = drupal_get_path('theme', variable_get('theme_default', NULL)); ?>
  
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
    
  <?php print $page_bottom; ?>
</body>
</html>