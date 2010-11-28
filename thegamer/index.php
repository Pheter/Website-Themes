<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <div class="entry box full-size">
        <!-- Post ID: <?php the_ID(); ?> -->
        <div class="border-tl"></div>
        <div class="border-top"></div>
        <div class="border-tr"></div>
        <div class="border-right"></div>
        <div class="border-br"></div>
        <div class="border-bottom"></div>
        <div class="border-bl"></div>
        <div class="border-left"></div>
        <h1><?php the_title(); ?></h1>
        <div class="meta">
            <p class="author">by <?php the_author(); ?></p>
            <p class="date">on <?php the_time(get_option('date_format')); ?></p>
        </div>
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>
