<?php

/*
  Template Name: Projects
*/

?>

<div class="container">
  <div class="projects" style="background: url('<?php the_post_thumbnail_url(); ?>'); height: 100%; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover;" >
    <?php get_header(); ?>
    <div class="headline">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1 class="text-center" style="color: white; font-size: 50px; text-transform:uppercase;"><?php the_title(); ?></h1>
      <?php
      $phrase = get_the_content();
      $phrase = apply_filters('the_content', $phrase);
      $replace = '<p class="text-center" style="color: white; font-size: 16px;">';
      echo str_replace('<p>', $replace, $phrase);
      ?>
    <?php endwhile;  endif;?>
    </div>
    <div class="arrow">
      <img src="<?php echo site_url(); ?>/wp-content/uploads/2017/03/arrow-down@2x.png" alt="Arrow Down" width="100px" style="position: absolute; top: 90%; left: 50%; transform: translateX(-50%) translateY(-50%);" />
    </div>
  </div>
</div>


<?php
$args = array(
  'post_type' => 'project'
);
$query = new WP_Query ($args);

 ?>

 <section class="row no-max collapse" id='projects' style="background: black;">
   <?php if( $query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
     <div class="small-12 medium-6 large-6 columns " style="padding: 0; margin: 0;">
     <style>
       .project-image:hover { opacity:0.3;}
       .project-image:hover h1{display:block !important; font-size:400%; text-transform: uppercase; text-align: center; position: relative; top:40%; width: 100%; color: white;}
       @media screen and (max-width: 768px){
         .project-image{ background: black;}
         .project-image img{ opacity:0.5;}
         .project-image h1{display:block !important; font-size:400%; text-transform: uppercase; text-align: center; position: relative; width: 100%; color: white;}
       }
     </style>
       <a style="display:block" href="<?php the_permalink(); ?>">
         <div class="project-image transition" style="display: inline-block; background: url('<?php the_post_thumbnail_url(); ?> '); width: 100%; height: 50%; background-size: cover; ">
           <h1 style="display: none; "><?php the_title(); ?></h1><br>
         </div>
       </a>
     </div>
   <?php endwhile; endif; wp_reset_postdata(); ?>
 </section>

<?php get_footer(); ?>
