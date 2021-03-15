<?php $contact_section = get_field('footer_settings', 'option'); ?>

<section class="contactus">
  <div class="warp">
    <div class="container v-center">
      <div class="col-md-4 col-sm-4">
        <div class="content">
          <h1><?php echo $contact_section['contact_us_title']; ?></h1>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="content">
          <h2><?php echo $contact_section['phone_number']; ?></h2>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="content">
          <div class="socialicons">
            <a href="<?php echo $contact_section['twitter_link']; ?>" target="_blank"><span class="icon-twitter"></span></a>
            <a href="<?php echo $contact_section['facebook_link']; ?>" target="_blank"><span class="icon-facebook"></span></a>
            <a href="<?php echo $contact_section['inastagram_link']; ?>" target="_blank"><span class="icon-linkedin"></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bottomBar">
  <div class="container">
    <div class="col-sm-6">
      <div class="copyrights">
        <p>© Copyright <?php echo date('Y'); ?>, The Brand Bees</p>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="links">
        <p><a href="#7">Privacy Policy</a> <a href="#7">Sitemap</a></p>
      </div>
    </div>
  </div>
</section>

<!-- JavaScript plugins -->
<?php wp_footer(); ?>
<script>
function goBack() {
    window.history.back();
}
</script>
</body>

</html>