<?php if ( have_rows('resume_items')) : ?>
    <div class="resume row mt-3 mb-5">
        <?php while (have_rows('resume_items')): the_row(); ?>
            <div class="resume-post pt-3 pb-2">
                <h4 class="resume-title"><?php the_sub_field('resume_title');?> - <span><?php the_sub_field('resume_place');?></span></h4>
                <p class="resume-time-period"><i><?php the_sub_field('resume_time');?></i></p>
                <p class="resume-description"><?php the_sub_field('resume_description');?></p>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
