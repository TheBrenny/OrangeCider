    <?php theme_include('header'); ?>
    <div id="site_content">
      <?php theme_include('sidebar'); ?>
      <div id="content">
        <header>
          <h1><?php echo page_title(); ?></h1>
        </header>
        <p><?php echo page_content(); ?></p>
      </div>
    </div>
    <?php theme_include('footer'); ?>
