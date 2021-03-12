<div class="image-carousel-block">

<?php if ( have_rows('image_carousel')) : ?>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php while (have_rows('image_carousel')): the_row(); ?>
            <div class="swiper-slide">
                <?php if (get_sub_field('single_carousel_image')) :
                    echo wp_get_attachment_image(get_sub_field('single_carousel_image')['ID'], 'large');
                endif; ?>
            </div>
            <?php endwhile; ?>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
<?php endif; ?>

</div>
