<?php

/**
 * Implements hook_panels_layouts()
 */
function fun_event_panels_layouts() {
  $items['event'] = array(
    'title' => t('Event (ZF): Puzzle'),
    'category' => t('Foundation: 1'),
    'icon' => 'event.png',
    'theme' => 'event',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array( 'top'       => t('Top block 1/3'),
                        'top_a'     => t('Top block 2/3'),
                        'middle'    => t('Middle 1st block (2/3)'),
                        'middle_a'  => t('Middle 2nd block (1/3)'),
                        'bottom'    => t('Bottom 1st block (2/3)'),
                        'bottom_a'  => t('Bottom 2nd block (1/3)')),
  );
  return $items;
}
