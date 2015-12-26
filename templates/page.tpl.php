<div class="page-wrapper">
  <div class="dumb-1200">
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
          </section>
        </nav>
        <?php if ($top_bar_classes): ?>
          </div>
        <?php endif; ?>
        <!--/.top-bar -->
      <?php endif; ?>

      <!-- Title, slogan and menu -->
      <?php if ($alt_header): ?>
        <section class="row <?php print $alt_header_classes; ?>">

          <?php if ($linked_logo): print $linked_logo; endif; ?>

          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div id="site-name" class="element-invisible">
                <strong>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </strong>
              </div>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <h2 title="<?php print $site_slogan; ?>" class="site-slogan"><?php print $site_slogan; ?></h2>
          <?php endif; ?>

          <?php if ($alt_main_menu): ?>
            <nav id="main-menu" class="navigation" role="navigation">
              <?php print ($alt_main_menu); ?>
            </nav> <!-- /#main-menu -->
          <?php endif; ?>

          <?php if ($alt_secondary_menu): ?>
            <nav id="secondary-menu" class="navigation" role="navigation">
              <?php print $alt_secondary_menu; ?>
            </nav> <!-- /#secondary-menu -->
          <?php endif; ?>

        </section>
      <?php endif; ?>
      <!-- End title, slogan and menu -->

      <?php if (!empty($page['header'])): ?>
        <!--.l-header-region -->
        <section class="l-header-region row">
          <div class="columns">
            <?php print render($page['header']); ?>
          </div>
        </section>
        <!--/.l-header-region -->
      <?php endif; ?>
      <div class="menu-bg-left-wrapper">
        <div class="menu-bg-right-wrapper">
          <div class="row">
           <div class="large-12 columns">
              <?php print
                theme (
                  'links', array (
                    'links' => menu_navigation_links('menu-events'),
                    'attributes' => array (
                      'class'=> array (
                                       'inline-list',
                                       'menu-events',
                                       'text-center')) ));
              ?>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--/.l-header -->

    <?php if (!empty($page['featured'])): ?>
      <!--.l-featured -->
      <section class="l-featured row">
        <div class="columns">
          <?php print render($page['featured']); ?>
        </div>
      </section>
      <!--/.l-featured -->
    <?php endif; ?>

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
    <main role="main" class="row l-main">
      <!-- .l-main region -->
      <div class="<?php print $main_grid; ?> main large-12 columns">
        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlight panel callout">
            <?php print render($page['highlighted']); ?>
          </div>
        <?php endif; ?>

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

      <?php if (!empty($page['sidebar_first'])): ?>
        <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?>

      <?php if (!empty($page['sidebar_second'])): ?>
        <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>
    </main>
    <!--/.l-main -->

    <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
      <!--.triptych-->
      <section class="l-triptych row">
        <div class="triptych-first medium-4 columns">
          <?php print render($page['triptych_first']); ?>
        </div>
        <div class="triptych-middle medium-4 columns">
          <?php print render($page['triptych_middle']); ?>
        </div>
        <div class="triptych-last medium-4 columns">
          <?php print render($page['triptych_last']); ?>
        </div>
      </section>
      <!--/.triptych -->
    <?php endif; ?>

    <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
  </div>
  <!--/.page -->
  </div> <!-- /.dumb-1200 -->
</div>

  <!--.l-footer -->
  <footer role="contentinfo">
    <div class="dumb-1200">
      <?php if (!empty($page['footer_top'])): ?>
        <div class="footer-top">
          <div class="row">
            <div class="large-12 columns">
              <?php print render($page['footer_top']); ?>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <?php if (!empty($page['footer_bottom'])): ?>
        <div class="footer-bottom">
          <div class="row">
            <div class="large-12 columns">
              <?php print render($page['footer_bottom']); ?>
            </div>
          </div>
        </div>
      <?php endif; ?>

<!--    <div class="l-footer panel row"
      <?php if ($site_name) : ?>
        <div class="copyright columns">
          &copy; <?php print date('Y') . ' ' . $site_name . ' ' . t('All rights reserved.'); ?>
        </div>
      <?php endif; ?>
    </div>-->
    </div> <!-- /.dumb-1200 -->
  </footer>
  <!--/.l-footer -->
