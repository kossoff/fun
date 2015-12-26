<?php

/**
 * Implements hook_panels_layouts()
 */
function fun_front_panels_layouts() {
  $items['front'] = array(
    'title' => t('Front (ZF): 1 column row'),
    'category' => t('Foundation: 1'),
    'icon' => 'front.png',
    'theme' => 'front',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array( 'top'      => t('Top block (wide)'),
                        'middle_1'  => t('Middle 1st block (2/3)'),
                        'middle_2'  => t('Middle 2nd block (1/3)'),
                        'bottom_1'  => t('Bottom 1st block (2/3)'),
                        'bottom_2'  => t('Bottom 2nd block (1/3)')),
  );
  return $items;
}

