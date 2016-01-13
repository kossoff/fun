<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>>
        <a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="row">
    <div class="large-3 columns">
      <?php
        $type_img = 'quests.png';
        switch ($node->field_event_category['und'][0]['tid']) {
          case 1:
            $type_img = 'quests.png';
            break;
          case 2:
            $type_img = 'holidays.png';
            break;
          case 3:
            $type_img = 'camps.png';
            break;
          case 4:
            $type_img = 'growth.png';
            break;
        }
      ?>
      <img src="<?php print '/' . drupal_get_path('theme',$GLOBALS['theme']) . '/images/' . $type_img; ?>">
      <?php print render($content['field_event_datetime']); ?>
      Возрастная категория:
      от <?php print render($content['field_event_age_from']); ?> до <?php print render($content['field_event_age_to']); ?> лет
    </div>
    <div class="large-9 columns">
      <?php print render($content['field_event_image']); ?>
      <?php print render($content['field_event_price']); ?>
      <?php print render($content['field_event_location']); ?>
    </div>
  </div>

  <?php
  // We hide the comments and links now so that we can render them later.
  hide($content['comments']);
  hide($content['links']);
  hide($content['field_tags']);
  print render($content);
  ?>

  <?php if (!empty($content['field_tags']) && !$is_front): ?>
    <?php print render($content['field_tags']) ?>
  <?php endif; ?>

  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>

</article>
