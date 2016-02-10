<div class="page-wrapper">
  <!--.page -->
  <div role="document" class="page">

    <!--.l-header -->
    <header role="banner" class="l-header">

      <?php if ($top_bar): ?>
        <!--.top-bar -->
        <?php if ($top_bar_classes): ?>
          <div class="<?php print $top_bar_classes; ?>">
        <?php endif; ?>
        <nav class="top-bar" data-topbar <?php print $top_bar_options; ?>>
          <ul class="title-area">
            <li class="name"><a href="/"><img class="logo" src="/<?php print path_to_theme(); ?>/logo.svg" /></a></li>
            <li class="toggle-topbar menu-icon">
              <a href="#"><span></span></a>
            </li>
            <!-- <li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li> -->
          </ul>
          <section class="top-bar-section">
            <?php if ($top_bar_main_menu) : ?>
              <?php print $top_bar_main_menu; ?>
            <?php endif; ?>
            <?php if ($top_bar_secondary_menu) : ?>
              <?php print $top_bar_secondary_menu; ?>
            <?php endif; ?>
            <ul class="right">
              <li class="has-form"><a class="button round" href="#">Оставить заявку</a></li>
              <li class="phone"><a href="tel:+74995022550">+7 (499) 502-25-50</a></li>
            </ul>
          </section>
        </nav>
        <div class="menu-bg-left-wrapper">
          <div class="menu-bg-right-wrapper">
            <?php
              print theme (
                'links', array (
                  'links' => menu_navigation_links('menu-events'),
                  'attributes' => array (
                    'class'=> array (
                      'button-group',
                      'even-4',
                      'menu-events',
                    )
                  )
                )
              );
            ?>
          </div>
        <?php if ($top_bar_classes): ?>
          </div>
        <?php endif; ?>
        <!--/.top-bar -->
      <?php endif; ?>
      </div>
    </header>
    <!--/.l-header -->

    <div class="dumb-1200">
    <?php if ($messages && !$zurb_foundation_messages_modal): ?>
      <!--.l-messages -->
      <section class="l-messages row">
        <div class="columns">
          <?php if ($messages): print $messages; endif; ?>
        </div>
      </section>
      <!--/.l-messages -->
    <?php endif; ?>

    <?php if (!empty($page['help'])): ?>
      <!--.l-help -->
      <section class="l-help row">
        <div class="columns">
          <?php print render($page['help']); ?>
        </div>
      </section>
      <!--/.l-help -->
    <?php endif; ?>

    <!--.l-main -->
    <main role="main" class="l-main">
      <!-- .l-main region -->
      <div class="<?php print $main_grid; ?> main">

        <a id="main-content"></a>

        <?php /* if ($breadcrumb): print $breadcrumb; endif; */ ?>

        <?php if ($title): ?>
          <?php print render($title_prefix); ?>
          <h1 id="page-title" class="title"><?php print $title; ?></h1>
          <?php print render($title_suffix); ?>
        <?php endif; ?>

        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
          <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
        <?php endif; ?>

        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>
      </div>
      <!--/.l-main region -->

    <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
    </div> <!-- /.dumb-1200 -->
  </div>
  <!--/.page -->
</div>

  <!--.l-footer -->
  <footer role="contentinfo">
    <div class="footer-top">
      <div class="row">
        <div class="large-2 columns">
          <?php /*print render($page['footer_top']);*/ ?>
          <?php
            print theme (
              'links', array (
                'links' => menu_navigation_links('main-menu'),
                'attributes' => array (
                  'class'=> array (
                    'main-menu',
                    'menu',
                    'no-bullet'
                  )
                )
              )
            );
          ?>
        </div>
        <div class="large-6 columns">
          <?php
            print theme (
              'links', array (
                'links' => menu_navigation_links('menu-events'),
                'attributes' => array (
                  'class'=> array (
                    'menu-events',
                    'menu',
                    'no-bullet'
                  )
                )
              )
            );
          ?>
        </div>
        <div class="large-4 columns">
          <div class=" social-links">
          <h6>МЫ В СОЦИАЛЬНЫХ СЕТЯХ</h6>
          <a class="facebook" href="https://www.facebook.com/groups/time.fun.ru/"><i  class="fa fa-facebook fw fa-2x"></i></a>
          <a class="vkontakte" href="https://vk.com/timefun"><i  class="fa fa-vk fw fa-2x"></i></a>
          <a class="instagram" href="https://www.instagram.com/timefun_ru/"><i  class="fa fa-instagram fw fa-2x"></i></a>
          <a class="twitter" href="https://twitter.com/timefun_ru/"><i  class="fa fa-twitter fw fa-2x"></i></a>
          </div>
          <?php if ($site_name) : ?>
            <div class="copyright">
              &copy; 2015&nbsp;&mdash; <?php print date('Y') . ' ' . $site_name; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <?php /* if (!empty($page['footer_bottom'])): ?>
      <div class="footer-bottom">
        <div class="row">
          <div class="large-12 columns">
            <?php print render($page['footer_bottom']); ?>
          </div>
        </div>
      </div>
    <?php endif; */ ?>
  </footer>
  <!--/.l-footer -->
