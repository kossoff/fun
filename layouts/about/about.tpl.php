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
<div class="row watch-1">
  <div class="medium-12 columns">
    <?php print $content['middle']; ?>
  </div>
</div>
<div class="wide" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
  <?php print $content['wide_1']; ?>
</div>
<div class="row watch-2" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
  <div class="medium-12 columns">
    <?php print $content['middle_2']; ?>
  </div>
</div>
<div class="wide" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
  <?php print $content['wide_2']; ?>
</div>
<div class="row" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
  <div class="medium-12 columns">
    <?php print $content['middle_3']; ?>
  </div>
</div>
