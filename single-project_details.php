<?php
/**
 * The Project Details page 
 */
get_header();
if (have_posts()) {
  while (have_posts()) {
    the_post();
    $img = get_the_post_thumbnail();

?>
<section class="sectionTwo detailsPage">
  <div class="warp">
    <div class="title">
      <div class="container">
        <div class="col-sm-10 col-xs-9">
          <h1>
            <?php the_title(); ?>
          </h1>
        </div>
        <div class="col-sm-2 col-xs-3">
          <a href="javascript:;" onclick="goBack()">
            <img class="img-responsive back-arrow" src="<?php echo get_template_directory_uri()?>/img/back-arrow.png"alt="back">
          </a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="intro">
        <div class="row">
          <?php $project_intro = get_field('project_intro') ;  
          $introImageId = $project_intro['image'];
          $introImage = wp_get_attachment_image_src($introImageId, array('1200','800'), true );
          ?>
          <div class="col-sm-6">
            <img class="img-responsive" src="<?php echo $introImage[0]; ?>" alt="">
          </div>
          <div class="col-sm-6">
            <div class="introData">
              <h2><?php echo $project_intro['title'];?></h2>
              <br>
              <p class="lead"><?php echo $project_intro['subtitle'];?></p>
              <br>
              <?php echo $project_intro['content']; ?>
            </div>
          </div>
        </div>
      </div>
      <?php 
      $posts = get_field('project_posts'); 
      if(!empty($posts)) :
      ?>
      <div class="content">
        <?php 
        
          foreach($posts as $post){
            $imageId = $post['image'];
            $image = wp_get_attachment_image_src($imageId, array('1200','800'), true );
            ?>

            <div class="col-sm-6 box">
            <?php if($image): ?>
              <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="">
            <?php endif; 
            if($post['content']): ?>
              <p><?php echo $post['content']; ?></p>
            <?php endif; ?>
            </div>

            <?php
          }
        
        ?>
        
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php 
  }
}
get_footer();
?>