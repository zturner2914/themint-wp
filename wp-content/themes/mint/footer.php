<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <?php the_field('footer_phone', 'option'); ?>
      </div>
      <div class="col-sm-8">
        <?php the_field('footer_addresses', 'option'); ?>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
