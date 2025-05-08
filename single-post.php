<?php get_header(); ?>

<main class="single-news">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
        
            <article class="news-article">
                <h1><?php the_title(); ?></h1>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="news-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                
                <div class="news-content">
                    <?php the_content(); ?>
                </div>

            </article>

        <?php endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
