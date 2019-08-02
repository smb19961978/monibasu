<footer>
    <div class="container">
        <div class="row icons">
          <div class="twelve columns footer">
              <?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
              <?php //dynamic_sidebar('facebook'); ?>
              <?php //dynamic_sidebar('twitter'); ?>
              <?php //dynamic_sidebar('instagram'); ?>
              <?php //dynamic_sidebar('linkedin'); ?>

        </div>
      </div>
        <div class="copyright">
              <p>Moni Basu <?php echo date("Y");?> &copy; </p>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
