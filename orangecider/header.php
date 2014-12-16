<!DOCTYPE HTML>
<html>
  <head>
    <title><?php echo page_title("Page cannot be found! :("); ?> - <?php echo site_name()?></title>
    <link href="<?php echo theme_url('style/style.css'); ?>" media="screen" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="generator" content="Anchor CMS">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
    <script type="text/javascript" src="<?php echo theme_url('scripts/mottoChanger.js'); ?>"></script>
  </head>
  <body>
    <div id="main">
      <div id="header">
        <div id="logo">
          <div id="logo_text">
            <h1><a href="<?php echo base_url(); ?>" title="<?php site_description(); ?>">Brenny<span class="logo_colour">-Tizer</span></a></h1>
            <h2 id="motto"><i>All this code...</i></h2>
            <script>changeMotto();</script>
          </div>
        </div>
        <div id="menubar">
          <ul id="menu">
            <?php if(has_menu_items()) : ?>
              <nav role="main">
                <?php while(menu_items()) : ?>
                  <li class="<?php if(menu_active()) echo 'selected'; ?>"><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
                <?php endwhile; ?>
              </nav>
            <?php endif; ?>
            <!-- <li class="selected"><a href="index.html">Home</a></li> -->
            <!-- <li><a href="examples.html">Examples</a></li> -->
            <!-- <li><a href="page.html">A Page</a></li> -->
            <!-- <li><a href="another_page.html">Another Page</a></li> -->
            <!-- <li><a href="contact.html">Contact Us</a></li> -->
          </ul>
        </div>
      </div>
