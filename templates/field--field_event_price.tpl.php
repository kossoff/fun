<div class="clearfix">
  <div class="left"><i class="price-label circus fa fa-rub fw"></i></div>
  <div class="left <?php print $classes; ?>"<?php print $attributes; ?>>
    <?php if (!$label_hidden): ?>
      <div class="field-label"<?php print $title_attributes; ?>><?php print $label ?>:&nbsp;</div>
    <?php endif; ?>
    <div class="field-items"<?php print $content_attributes; ?>>
      <?php foreach ($items as $delta => $item): ?>
        <?php print render($item); ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>