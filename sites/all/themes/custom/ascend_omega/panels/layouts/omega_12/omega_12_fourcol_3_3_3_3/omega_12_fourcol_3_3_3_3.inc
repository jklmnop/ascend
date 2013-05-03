<?php

/**
 * Implements hook_panels_layouts().
 */
function ascend_omega_omega_12_fourcol_3_3_3_3_panels_layouts() {
  $items['omega_12_fourcol_3_3_3_3'] = array(
    'title' => t('Four column 3-3-3-3'),
    'category' => t('Omega: 12 Column Grid'),
    'icon' => 'omega_12_fourcol_3_3_3_3.png',
    'theme' => 'omega_12_fourcol_3_3_3_3',
    'admin css' => 'omega_12_fourcol_3_3_3_3.css',
    'regions' => array(
      'left' => t('Left side'),
      'middle_1' => t('Middle column 1'),
      'middle_2' => t('Middle column 2'),
      'right' => t('Right side')
    ),
  );

  return $items;
}
