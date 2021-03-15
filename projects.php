<div class="galleryNav">
  <a href="#" data-filter="*" class="current"><?php echo "Show all"; ?></a>
  <?php
  $terms = get_terms(array(
    'taxonomy' => 'projects',
    'hide_empty' => true,
    'orderby'=> 'term_id'
  ));
  foreach($terms as $term) : ?>
    <a href="#" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
  <?php endforeach; ?>
</div>
<div class="gallerycontainer">
  <?php
  $postsPerPage = -1;
  if(get_the_ID() == 7){
    $postsPerPage = 12;
  }
  $query = new WP_Query( array( 'post_type' => 'project_details', 'posts_per_page' => $postsPerPage ) );
  if($query->have_posts()){
    while($query->have_posts()){
      $query->the_post();
      $tax_str = '';
      $post_tax = get_the_terms( get_the_ID(), "projects");
      foreach($post_tax as $post_tax1){
        $tax_str .= ' '.$post_tax1->slug;
      } ?>
      <div class="grid-item cover <?php echo $tax_str;?>" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID() ); ?>)">
          <a href="<?php echo get_the_permalink(); ?>"></a>
      </div>
      <?php
    }
  }
  ?>
</div>