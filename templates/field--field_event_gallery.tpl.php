<h3><i class="fa fa-picture-o"></i> Фото</h3>
<div class="h-scroll">
  <div class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <?php foreach ($items as $delta => $item): ?>
      <?php print render($item); ?>
    <?php endforeach; ?>
  </div>
</div>
