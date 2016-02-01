<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>>
        <a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="row" data-equalizer>
    <div class="large-3 columns">
      <div class="wrapper" data-equalizer-watch>
        <?php print render($content['field_event_date']); ?>
        <?php print render ($content['field_event_time']); ?>
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
        <div class="circus text-center event-age-plus">
          <?php print render($content['field_event_age_from']); ?>+
        </div>
        Возрастная категория:<br />
        от <?php print render($content['field_event_age_from']); ?> до <?php print render($content['field_event_age_to']); ?> лет
      </div>
    </div>
    <div class="large-9 columns">
      <div class="wrapper" data-equalizer-watch>
        <?php print render($content['field_event_image']); ?>
        <?php print render($content['field_event_price']); ?>
        <?php print render($content['field_event_location']); ?>
      </div>
    </div>
  </div>

  <?php
    hide($content['field_event_category']);
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    print render($content);
  ?>

  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>

</article>
