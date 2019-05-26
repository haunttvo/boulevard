<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
<header id="ahriheader" class="fixed-top">
    <?php get_header(); ?>
</header>
<div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    endif; ?>
</div>
<footer id="footer">
    <?php get_footer(); ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>