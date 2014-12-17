    <?php theme_include('header'); ?>
    <div id="site_content">
      <?php theme_include('sidebar')?>
      <div id="content">
        <?php if(has_posts()) : while(posts()) : ?>
          <article>
            <header>
              <h3 style="float:left">
                <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
              </h3>
              <h5 style="float:right"><?php echo article_date(); ?></h5>
            </header>
            <br style="clear:left">
            <p><?php echo article_description(); ?></p>
          </article>
        <?php endwhile; endif; ?>
      </div>
      <?php theme_include('pagination'); ?>
    </div>
    <?php theme_include('footer'); ?>
