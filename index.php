<?php get_header(); ?>

<div class="main-container clearfix">
    <main class="main-content">
        <?php 
            if(have_posts()):
                while(have_posts()):
                    the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                <?php endwhile;
            endif;
        ?>
    </main>
    <div class="sidebar">
        <p>My sidebar</p>
        <?php dynamic_sidebar('sb1') ?>
    </div>
</div>

<?php get_footer(); ?>
<div>
    <?php dynamic_sidebar('ft1') ?>     
</div>