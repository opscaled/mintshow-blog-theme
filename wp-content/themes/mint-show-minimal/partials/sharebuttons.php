<?php
  $urlToShare = urlencode(get_permalink());
  $titleToShare = str_replace( ' ', '%20', get_the_title());
  $mediaToShare = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
?>


          <span>Share It </span>
          <a class="popup" target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo $titleToShare; ?>&amp;url=<?php echo $urlToShare; ?>">
            <i class="fa fa-twitter"></i>
          </a>
          <a class="popup" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $urlToShare; ?>">
            <i class="fa fa-facebook"></i>
          </a>
          <a class="popup" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo $urlToShare; ?>&amp;media=<?php echo $mediaToShare; ?>&amp;description=<?php echo $titleToShare; ?>">
            <i class="fa fa-pinterest"></i>
          </a>

