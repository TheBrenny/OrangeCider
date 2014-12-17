    <?php theme_include('header'); ?>
    <div id="site_content">
      <?php theme_include('sidebar'); ?>
      <div id="content">
        <header>
          <h3><?php echo page_title(); ?></h3>
        </header>
        <p><?php echo page_content(); ?></p>
      </div>
    </div>
    <?php theme_include('footer'); ?>
