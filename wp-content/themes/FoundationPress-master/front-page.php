<div class="container">
  <div class="front">
    <?php get_header(); ?>
    <div class="headline">
      <h1 class="text-center" style="color: white; font-size: 50px;">WHAT IS YOUR VISION?</h1>
      <p class="text-center" style="color: white; font-size: 16px;">
        We’re a Honolulu-based home design and remodeling company with just one goal: to turn your vision for the perfect home into reality.  Whether you want to update a single room, or have a complete renovation in mind, our collaborative approach, full-service expertise, and exceptional attention to detail will ensure that the results exceed your expectations.
      </p>
    </div>
    <div class="arrow">
      <img src="/Accent/wp-content/uploads/2017/03/arrow-down@2x.png" alt="Arrow Down" width="100px" style="position: absolute; top: 90%; left: 50%; transform: translateX(-50%) translateY(-50%);" />
    </div>
  </div>
</div>

<?php

$args = array(
  'post_type' => 'project'
);
$query = new WP_Query ($args);

 ?>

<section class="row no-max collapse" id='projects' style="padding: 0; margin: 0; background: black;">
  <br><br><br><br><br>
  <h1 class="text-center" style="font-size: 50px; padding-bottom: 0; color: white;">PROJECTS<br><span style="border-bottom: 1px solid white; padding: 0; margin: 0; line-height: 0; font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h1>
  <br><br><br><br><br>
  <?php if( $query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
    <div class="small-12 medium-6 large-6 columns " style="padding: 0; margin: 0;">
    <style>
      .project-image:hover { opacity:0.3;}
      .project-image:hover h1{ display:block !important; font-size:400%; text-transform: uppercase; text-align: center; position: relative; top:40%; width: 100%; color: white;}
      @media screen and (max-width: 768px){
        .project-image{ background: black;}
        .project-image img{ opacity:0.5;}
        .project-image h1{display:block !important; font-size:400%; text-transform: uppercase; text-align: center; position: relative; width: 100%; color: white;}
      }
    </style>
      <a style="display:block" href="<?php the_permalink(); ?>">
        <div class="project-image transition" style="display: inline-block; background: url('<?php the_post_thumbnail_url(); ?> '); width: 100%; height: 50%; background-size: cover; ">
          <h1 style="display: none;"><?php the_title(); ?></h1><br>
        </div>
      </a>
    </div>
  <?php endwhile; endif; wp_reset_postdata(); ?>
</section>
<?php get_footer(); ?>
