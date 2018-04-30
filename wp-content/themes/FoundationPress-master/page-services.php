
<?php
/*
  Template Name: Services
*/
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="container">
    <div class="services" style="background: url('<?php the_post_thumbnail_url(); ?>'); height: 100%; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover;">
      <?php get_header(); ?>
      <div class="row headline">
        <h1 class="text-center" style="color: white; font-size: 50px; text-transform:uppercase;"><?php the_title(); ?></h1>
        <br>
      </div>
      <div class="arrow">
        <img src="/Accent/wp-content/uploads/2017/03/arrow-down@2x.png" alt="Arrow Down" width="100px" style="position: absolute; top: 90%; left: 50%; transform: translateX(-50%) translateY(-50%);" />
      </div>
    </div>
  </div>

  <div class="container" style="background: #4d4d4d;">
    <div class="row" style="padding: 3%;">
      <?php
      $phrase = get_the_content();
      $phrase = apply_filters('the_content', $phrase);
      $replace = '<p style="color: white; font-size: 16px;">';
      echo str_replace('<p>', $replace, $phrase);
      ?>
    </div>
    <div class="row" style="padding: 3%;">
      <div class="columns small-12 medium-6 large-4 text-center">
        <a target="_blank" href="http://www.tilewarehousehawaii.com/"><img src="/Accent/wp-content/uploads/2017/03/6025344_orig.jpg" alt="Tile Warehouse, Inc" /></a>
      </div>
      <div class="columns small-12 medium-6 large-4 text-center">
        <a target="_blank" href="http://www.designcraftcabinets.com/"><img src="/Accent/wp-content/uploads/2017/03/6258217_orig.jpg" alt="Design Craft" /></a>
      </div>
      <div class="columns small-12 medium-6 large-4 text-center">
        <a target="_blank" href="http://www.medallioncabinetry.com/"><img src="/Accent/wp-content/uploads/2017/03/895803_orig.gif" alt="Medallion Cabinetry" /></a>
      </div>
    </div>
  </div>

<?php endwhile; else : ?>

  <p><?php _e( 'Sorry, no pages found' ); ?></p>

<?php endif; ?>

<?php get_footer(); ?>
