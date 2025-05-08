<?php get_header(); ?>

<section class="single-car-page">
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        $is_sold = get_field('sold');
        $is_deal = get_field('deal');
        $price = get_field('price');
?>
    <article class="single-car-item <?php if ($is_sold) echo 'sold'; ?>">

        <?php if (has_post_thumbnail()) : ?>
<div class="single-car-image <?php if ($is_sold) echo 'sold'; ?>">
    <?php the_post_thumbnail('large'); ?>
    <?php if ($is_sold) : ?>
        <div class="sold-overlay center">SOLD</div>
    <?php endif; ?>
    <?php if ($is_deal && !$is_sold) : ?>
        <div class="deal-badge">-20%</div>
    <?php endif; ?>
</div>
        <?php endif; ?>

        <div class="single-car-content">
            <h1><?php the_field('brand'); ?> <?php the_field('model'); ?></h1>

            <div class="car-meta">
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

                <p><strong>Brand:</strong> <?php the_field('brand'); ?></p>
                <p><strong>Model:</strong> <?php the_field('model'); ?></p>
                <p><strong>Mileage:</strong> <?php the_field('mileage'); ?> km</p>
                <p><strong>Year:</strong> <?php the_field('year'); ?></p>
                <p><strong>Fuel Type:</strong> <?php the_field('fuel_type'); ?></p>
                <p><strong>Transmission:</strong> <?php the_field('transmission'); ?></p>
            </div>
        </div>

    </article>

<?php
    endwhile;
endif;
?>
</section>

<?php get_footer(); ?>