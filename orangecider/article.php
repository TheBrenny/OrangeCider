    <?php theme_include('header'); ?>
    <div id="site_content">
      <?php theme_include('sidebar'); ?>
      <div id="content">
        <article>
          <header>
            <h3 style="text-align:left;float:left;"><?php echo article_title(); ?></h3>
            <h5 style="text-align:right;float:right;"><?php echo article_date(); ?></h5>
          </header>
          <br style="clear:left">
          <?php echo article_markdown(); ?>
        </article>
      </div>
      <?php if(has_pagination()) : ?>
        <nav class="pagination">
          <?php echo posts_prev(); ?>
          <?php echo posts_next(); ?>
        </nav>
      <?php endif; ?>
    </div>
    <?php theme_include('footer'); ?>
