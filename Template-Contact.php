<?php
/**
 * Template Name: Contact Template
 * 
*/

get_header(); 
?>

<section class="sectionTwo signup">
  <div class="warp">
    <div class="container">
      <div class="col-md-6 col-sm-6">
        <div class="content">
          <?php $contact_section = get_field('cntact_us_information', 81, true); ?>
          <h1><?php echo $contact_section['section_ttitle']; ?></h1>
          <p><?php echo $contact_section['street_number']; ?><br>
          <?php echo $contact_section['city_and_area']; ?><br>
          <?php echo $contact_section['country']; ?></p>
        </div>
      </div>
      <div class="col-md-5 col-md-offset-1 col-sm-6">
        <?php echo do_shortcode('[contact-form-7 id="95" html_class="contactForm" title="Contact form 1"]'); ?>
      </div>
    </div>
  </div>
</section>

<section class="googlemap">
  <div id="map_wrapper">
    <div id="map_canvas" class="mapping"></div>
  </div>
</section>

<?php 
$mapSetting = get_field('map_settings', 81, true);
$titleMap = $mapSetting['title'];
$lat = $mapSetting['lat'];
$lng = $mapSetting['lng'];
get_footer(); 
?>
<script>
  // initialize('<?php echo get_template_directory_uri(); ?>/img/pin.png' ,[['', ,]]);
  
  $(function (){
    $('#btnSubmit').on('click', function(e){
      e.preventDefault();
      $('#contactSubmit').click();
    });
  });
  
</script>

<script>
  initialize('<?php echo get_template_directory_uri(); ?>/img/pin.png' ,[['<?php echo $titleMap; ?>', <?php echo $lat; ?>, <?php echo $lng; ?>]]);

</script>