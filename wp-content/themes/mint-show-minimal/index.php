<?php
/**
 * The main template file
**/

get_header();
if (have_posts()) :
	while (have_posts()) : the_post();
?>

  <?php
  if (is_single()) {
    get_template_part( 'partials/singleblog', get_post_format() );
  // } elseif (is_home()) {
  } else {
    get_template_part( 'partials/blogsnippet', get_post_format() );
  }
  ?>

  <?php	endwhile; ?>
  <!-- Load More Posts Btn -->
  <?php
  global $wp_query; // you can remove this line if everything works for you
  
  // don't display the button if there are not enough posts
  if (  $wp_query->max_num_pages > 1 )
    echo '<div class="btn ms-load-posts misha_loadmore">Load More posts</div>'; // you can use <a> as well
?>

<?php     
else :
	?>
	<h2>No Posts Found</h2>
	<p>Sorry, there are no posts yet.</p>
<?php
endif;
// get_sidebar();
get_footer();
?>