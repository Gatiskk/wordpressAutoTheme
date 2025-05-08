<?php get_header(); ?>
<section class="car-listing">
<?php get_template_part('home-news'); ?>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'car',
    'posts_per_page' => 6,
    'paged' => $paged
);

$car_query = new WP_Query($args);

if ($car_query->have_posts()) :
    while ($car_query->have_posts()) : $car_query->the_post();
        $is_sold = get_field('sold'); // get "sold" field
        $is_deal = get_field('deal'); // get "deal" field
        $price = get_field('price'); // get price field
    ?>
        <article class="car-item <?php if ($is_sold) echo 'sold'; ?>">

            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="car-image">
                        <?php the_post_thumbnail('medium'); ?>
                        <?php if ($is_sold) : ?>
                            <div class="sold-overlay">SOLD</div>
                        <?php endif; ?>
                        <?php if ($is_deal && !$is_sold) : ?>
                            <div class="deal-badge">-20%</div>
                        <?php endif; ?>
                    </div>
                </a>
            <?php endif; ?>

            <div class="car-content">
                <h2 class="car-title">
    <a href="<?php the_permalink(); ?>">
        <?php the_field('brand'); ?> <?php the_field('model'); ?>
    </a>
        </h2>
                <div class="car-details">
                    <p>Brand: <?php the_field('brand'); ?></p>
                    <p>Model: <?php the_field('model'); ?></p>

                    <?php if ($is_deal && !$is_sold) : 
                        $discount_price = $price * 0.8;
                    ?>
                        <p class="car-price">
                            <span class="old-price">€<?php echo number_format($price, 0, ',', ' '); ?></span>
                            <span class="new-price">€<?php echo number_format($discount_price, 0, ',', ' '); ?></span>
                        </p>
                    <?php else : ?>
                        <p class="car-price">€<?php echo number_format($price, 0, ',', ' '); ?></p>
                    <?php endif; ?>

                    <p>Mileage: <?php the_field('mileage'); ?> km</p>
                    <p>Year: <?php the_field('year'); ?></p>
                    <p>Fuel Type: <?php the_field('fuel_type'); ?></p>
                    <p>Transmission: <?php the_field('transmission'); ?></p>
                </div>
            </div>

        </article>
    <?php endwhile;
    wp_reset_postdata();
else :
    echo '<p>No cars found</p>';
endif;
?>
</section>

<div class="pagination">
    <?php
    echo paginate_links(array(
        'total' => $car_query->max_num_pages
    ));
    ?>
</div>
<?php get_footer(); ?>