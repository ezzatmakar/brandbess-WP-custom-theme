<?php
/**
 * Template Name: Home Template
 */
get_header();
?>

<section class="sectionTwo homeGallery">
  <?php get_template_part('projects'); ?>
</section>

<?php $beSocial = get_field('be_social', 7, true); ?>
<section class="services">
  <div class="warp">
    <div class="container v-center">
      <div class="col-md-6 col-sm-6">
        <div class="content">
          <p><?php echo $beSocial['paragraph']?></p>
          <h1><?php echo $beSocial['title']?></h1>
          <br>
          <div class="text-center">
            <a class="main-btn" href="<?php echo get_page_link(111); ?>"><span><?php echo "See How"; ?></span></a>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-md-offset-1 col-sm-6">
        <ul class="servicesList">
          <?php 
          $services = $beSocial['services_list'];
          foreach($services as $service) :
            $serviceIconID = $service['service_icon'];
            $serviceIcon = wp_get_attachment_image_src($serviceIconID, array('200','150'), true );
            ?>
              <li style="background-image: url(<?php echo $serviceIcon[0]; ?>)"><?php echo $service['service_title']; ?></li>
            <?php
          endforeach;
          ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="signup">
  <div class="warp">
    <div class="container v-center">
      <div class="col-md-6 col-sm-6">
        <div class="content">
          <h1>Sign up</h1>
          <p>Get on the list to get any updates deliverd right into your inbox</p>
        </div>
      </div>
      <div class="col-md-5 col-md-offset-1 col-sm-6">
        <!--<form>-->
          <?php es_subbox($namefield = "YES", $desc = "", $group = "Public"); ?>
        <!--</form>-->
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
<script>
    $(function(){
        console.log('test');
        $("form .infotxt #es_txt_button_pg").removeClass().addClass("main-btn");
        $("#es_shortcode_msg").addClass("text-center");
    });
</script>