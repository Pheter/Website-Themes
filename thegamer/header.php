<!DOCTYPE html>
<html>
    <head>
        <title><?php echo_title(); ?></title>
        
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        
        <link rel="stylesheet" href="<?php css_dir(); ?>/base.css" />
        <link rel="stylesheet" href="<?php css_dir(); ?>/structure.css" />
        <link rel="stylesheet" href="<?php css_dir(); ?>/box.css" />
        <link rel="stylesheet" href="<?php css_dir(); ?>/content.css" />
        <link rel="stylesheet" href="<?php css_dir(); ?>/misc.css" />
    </head>
    <body class="<?php echo_category(); ?>">
        <div id="top"></div>
        <div id="main">
            <a href="/"><img src="/wp-content/themes/thegamer/images/home-icon.png" alt="" id="home-icon" /></a>
