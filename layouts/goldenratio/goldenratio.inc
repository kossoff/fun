<?php

/**
 * Implements hook_panels_layouts()
 */
function fun_goldenratio_panels_layouts() {
  $items['goldenratio'] = array(
    'title' => t('Golden Ratio (ZF)'),
    'category' => t('Foundation: 1'),
    'icon' => 'goldenratio.png',
    'theme' => 'goldenratio',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array( 'top23'     => t('Top block 2/3'),
                        'top13'     => t('Top block 1/3'),
                        'bottom13'  => t('Bottom 1st block (1/3)'),
                        'bottom23'  => t('Bottom 2nd block (2/3)')),
  );
  return $items;
}
