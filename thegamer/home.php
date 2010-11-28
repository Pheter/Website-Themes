<?php get_header(); ?>

<?php if (function_exists('featuredposts')) { featuredposts(); } ?>

<div class="box full-size">
    <div class="border-tl"></div>
    <div class="border-top"></div>
    <div class="border-tr"></div>
    <div class="border-right"></div>
    <div class="border-br"></div>
    <div class="border-bottom"></div>
    <div class="border-bl"></div>
    <div class="border-left"></div>
    <ol class="entries">
        <?php while ( have_posts() ) : the_post(); ?>
            <li>
                <div class="meta">
                    <p class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
                    <p class="author">by <?php the_author(); ?></p>
                    <p class="date">on <?php the_time(get_option('date_format')); ?></p>
                </div>
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </li>
        <?php endwhile; ?>
    </ol>
</div>

<?php get_footer(); ?>