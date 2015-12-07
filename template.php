<?php

/**
 * Implements template_preprocess_html().
 */
function fun_preprocess_html(&$variables) {
}

/**
 * Implements template_preprocess_page.
 */
function fun_preprocess_page(&$variables) {
}

/**
 * Implements template_preprocess_node.
 */
function fun_preprocess_node(&$variables) {
}

function fun_links__topbar_main_menu($variables) {
  // We need to fetch the links ourselves because we need the entire tree.
  $links = menu_tree_output(menu_tree_all_data(variable_get('menu_main_links_source', 'main-menu')));
  $output = _zurb_foundation_links($links);
  // $variables['attributes']['class'][] = '';

  return '<ul' . drupal_attributes($variables['attributes']) . '><li class="phone"><a href="tel:+79852700557">+7 (985) 270-05-57</li>' . $output . '</ul>';
}