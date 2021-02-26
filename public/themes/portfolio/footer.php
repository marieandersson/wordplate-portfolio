</div> <!-- / container  -->
<footer class="footer bg-dark text-white pt-5 pb-5 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-6 d-flex flex-column">
        <?php if (get_field('footer_contact_label', 'option')): ?>
          <h4><?php the_field('footer_contact_label', 'option');?></h4>
        <?php endif; ?>

        <?php if (get_field('footer_email', 'option')): ?>
          <a class="text-white" href="mailto:<?php the_field('footer_email', 'option');?>">
            <?php the_field('footer_email', 'option');?>
          </a>
        <?php endif; ?>

        <div class="social-media mt-4 mb-3">
          <?php if (get_field('github_url', 'option')): ?>
            <a class="text-decoration-none" href="<?php the_field('github_url', 'option');?>">
              <img src="<?=get_template_directory_uri();?>/assets/images/github-icon.png" />
            </a>
          <?php endif; ?>

          <?php if (get_field('linkedin_url', 'option')): ?>
            <a class="text-decoration-none" href="<?php the_field('linkedin_url', 'option');?>">
              <img src="<?=get_template_directory_uri();?>/assets/images/linkedin-icon.png" />
            </a>
          <?php endif; ?>

          <?php if (get_field('twitter_url', 'option')): ?>
            <a class="text-decoration-none" href="<?php the_field('twitter_url', 'option');?>">
              <img src="<?=get_template_directory_uri();?>/assets/images/twitter-icon.png" />
            </a>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-6 d-flex flex-column justify-content-end align-items-end">
        <div class="mt-4">
          <?php if (get_field('footer_copyright', 'option')): ?>
            <p class="text-secondary"><em><?php the_field('footer_copyright', 'option');?></em></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>