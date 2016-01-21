<div<?php print $attributes; ?>>

  <?php if (!empty($page['heading'])) : ?>
    <div class="l-heading">
      <div class="l-container">
        <?php print render($page['heading']); ?>
      </div>
    </div>
  <?php endif; ?>

  <header class="l-header" role="banner">

    <div class="l-branding" id="l-branding">
      <?php print render($page['branding']); ?>
    </div>

    <?php print render($page['header']); ?>

    <?php if (!empty($page['navigation'])) : ?>
      <div class="relative">
        <div id="off-canvas" class="l-off-canvas">
          <div class="l-container">
            <span class="off-canvas-toggler"><span>Menu</span></span>
            <?php print render($page['navigation']); ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </header>


  <?php if (!empty($page['pre_content'])) : ?>
    <div class="l-pre-content">
      <div class="l-container">
        <?php print render($page['pre_content']); ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="l-content" role="main">
    <?php print render($page['highlighted']); ?>

    <div class="l-container">

      <div class="content">
        <?php print render($page['content']); ?>
      </div>

      <?php print render($page['sidebar_first']); ?>

      <?php print render($page['sidebar_second']); ?>
    </div>
  </div>

  <?php if (!empty($page['post_content'])) : ?>
    <div class="l-post-content">
      <div class="l-container">
        <?php print render($page['post_content']); ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($page['footer'])) : ?>
    <footer class="l-footer" role="contentinfo">
      <div class="l-container">
        <?php print render($page['footer']); ?>
      </div>
    </footer>
  <?php endif; ?>

  <?php if (!empty($page['post_footer'])) : ?>
    <footer class="l-post-footer">
      <div class="l-container">
        <?php print render($page['post_footer']); ?>
      </div>
    </footer>
  <?php endif; ?>
</div>
