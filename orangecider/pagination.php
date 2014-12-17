      <div id="pagination">
        <?php if(has_pagination()) : ?>
          <nav class="pagination">
            <?php echo posts_prev(); ?>
            <?php echo posts_next(); ?>
          </nav>
        <?php endif; ?>
      </div>
