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
        <div id="comments">
          <?php if(comments_open()) : ?>
            <h3>Comments!</h3>
            <p>Total comments: <?php echo total_comments(); ?><br>
            <?php if(total_comments() < 1) : ?>
              Be the first to comment!</p>
            <?php endif; ?>
            <?php if(has_comments()) : ?>
              <?php while(comments()) : ?>
                <h4 style="float:left"><?php echo comment_name(); ?></h4>
                <h5 style="float:right"><?php echo comment_date(); ?></h5>
                <br style="clear:both">
                <?php echo comment_body(); ?>
              <?php endwhile; ?>
            <?php endif; ?>
          <?php else : ?>
            <p style="color:red">Comments are closed for this article. Sorry! :(</p>
          <?php endif; ?>
        </div>
      </div>
      <?php theme_include('pagination'); ?>
    </div>
    <?php theme_include('footer'); ?>
