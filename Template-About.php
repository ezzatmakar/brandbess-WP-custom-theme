<?php
/**
 * Template Name: About Template
 */
get_header();
?>


<section class="sectionTwo detailsPage">
  <div class="warp">
    <div class="title">
      <div class="container">
        <h1>Who we are..</h1>
      </div>
    </div>
    <div class="container">
      <div class="intro">
        <?php 
        $introSection = get_field('intro_section', 52, true); 
        $introImageId = $introSection['image'];
        $introImage = wp_get_attachment_image_src($introImageId, array('1200','800'), true );
        ?>
        <div class="row">
          <div class="col-sm-6">
            <img class="img-responsive" src="<?php echo $introImage[0]; ?>" alt="">
          </div>
          <div class="col-sm-6">
            <div class="introData">
              <h2><?php echo $introSection['title']; ?></h2>
              <br>
              <p class="lead"><?php echo $introSection['subtitle']; ?></p>
              <br>
              <?php echo $introSection['content']; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div><br>
      <div class="content">
        <div id="postsContent" class="col-txt-2">
          <?php // echo get_the_content(); 
          $post = get_post(get_the_ID()); 
          $content = apply_filters('the_content', $post->post_content); 
          echo $content;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

<script>
  $(function (){
    $("#postsContent img").removeClass().addClass('img-responsive');
  });
</script>