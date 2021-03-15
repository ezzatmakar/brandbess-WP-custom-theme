<?php
$topSection = get_field('home_top_section', 51, true);
$backgroundId = $topSection['background_image'];
$background = wp_get_attachment_image_src($backgroundId, array('1600','1200'), true );
?>
<section class="topSection v-center cover" style="background-image: url(<?php echo $background[0]; ?>)">
  <div class="warp">
    <div class="container">
      <div class="col-sm-12">
        <div class="content">
          <p><?php echo $topSection['paragraph']; ?></p>
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
  <img class="goDown" src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.png" alt="">
</section>