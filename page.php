<?php get_header(); ?>

    <div class="container">

        <?php if(is_active_sidebar('page-sidebar')): ?>

                <?php dynamic_sidebar('page-sidebar'); ?>

        <?php endif ?>


        <h1><?php the_title(); ?></h1>

    </div>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>


        <?php the_content(); ?>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>