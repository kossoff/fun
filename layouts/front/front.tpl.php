<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * This template provides a very simple "one column" panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['middle']: The only panel in the layout.
 */
?>
<div class="wide" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
  <?php print $content['top']; ?>
</div>
<div class="row collapse">
  <div class="medium-12 columns text-center">
    <div class="wrapper-events-header">
      <img  src="/<?php print path_to_theme(); ?>/images/upcoming.jpg" />
      <div><h2>Предстоящие мероприятия</h2></div>
      <span class="triangle"></span>
      <hr>
    </div>
  </div>
  <div class="medium-9 columns">
    <?php print $content['middle_1']; ?>
  </div>
  <div class="medium-3 columns">
    <?php print $content['middle_2']; ?>
  </div>
</div>
<div class="row collapse">
  <div class="medium-12 columns text-center">
    <div class="wrapper-events-header">
      <img  src="/<?php print path_to_theme(); ?>/images/past.jpg" />
      <div><h2>Прошедшие мероприятия</h2></div>
      <span class="triangle"></span>
      <hr>
    </div>
  </div>
  <div class="medium-9 columns">
    <?php print $content['bottom_1']; ?>
  </div>
  <div class="medium-3 columns">
    <?php print $content['bottom_2']; ?>
  </div>
</div>
