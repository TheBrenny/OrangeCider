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
          <div id="user_welcome">
            <h3 style="color:#FFF">Welcome, <b><?php echo (user_authed() ? user_authed_real_name() : 'Guest')?></b>!</h3>
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
          </ul>
          <form style="float:right;margin: 10px 0 0 0;padding-top: 5px;" action="<?php echo search_url(); ?>" method="post" id="search_form">
            <p>
              <input class="search" type="text" name="term" id="term" placeholder="Search..." value="<?php echo search_term()?>" />
              <input style="padding-bottom:10px;" type="image" name="submit" alt="Search" title="Search" src="<?php echo theme_url('style/search.png')?>" align="middle" />
            </p>
          </form>
        </div>
      </div>
