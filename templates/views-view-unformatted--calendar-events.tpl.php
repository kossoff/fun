<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="row collapse" data-equalizer>
  <?php foreach ($rows as $id => $row): ?>
    <div class="large-4 columns end" <?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
      <div class="wrapper" data-equalizer-watch>
        <?php print $row; ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>