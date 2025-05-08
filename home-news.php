<section class="news-section">
    <h2>Latest News</h2>
    <div class="news-listing">
        <?php
        $news_query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3
        ));

        if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post(); ?>
                <article class="news-item" style="background-image: url('<?php the_post_thumbnail_url('medium_large'); ?>');">
                    <div class="news-overlay">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                </article>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No news found.</p>';
        endif;
        ?>
    </div>
</section>