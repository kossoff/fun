<?php

/**
 * Implements hook_panels_layouts()
 */
function fun_about_panels_layouts() {
  $items['about'] = array(
    'title' => t('About (ZF): 1 column row'),
    'category' => t('Foundation: 1'),
    'icon' => 'about.png',
    'theme' => 'about',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array( 'middle'    => t('First block'),
                        'wide_1'    => t('Wide 1 block'),
                        'middle_2'  => t('Second block'),
                        'wide_2'    => t('Wide 2 block'),
                        'middle_3'  => t('Third block')),
  );
  return $items;
}

