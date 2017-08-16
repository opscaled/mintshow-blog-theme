<!-- single blog post -->

<!--  back-to-home & share section -->
<div class="ms-blog-share-section-wrap">
  <a href="<?php echo get_home_url(); ?>" class="ms-bk-to-home">
    <i class="fa fa-long-arrow-left"></i> Home
  </a>
  <p class="ms-blog-share-section">
    <?php get_template_part( 'partials/sharebuttons' ) ;?>
  </p>
</div>
<!--  ms-blog-share-section-wrap  -->
<!--  back-to-home & share section -->

<!-- blog date and title section -->
<div class="ms-detail-pg">
  <small class="ms-blog-date">
									<i class="fa fa-clock-o"></i> <?php the_time('F j, Y'); ?>
								</small>
  <h3 class="ms-blog-title">
    <?php the_title(); ?>
  </h3>
</div>
<!-- ms-detail-pg  -->
<!-- blog date and title section -->

<!-- blog in detail section -->
<div class="panel panel-default ms-blog-brief-wrap ms-blog-detail-wrap">

  <div class="panel-body">

    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="ms-blog-status">
        <span class="ms-post-likes">
												<i class="fa fa-thumbs-up"></i> 7
											</span>
        <span class="ms-post-likes">
												<i class="fa fa-comment"></i> 12
											</span>
        <span class="ms-post-likes">
												<i class="fa fa-share"></i> 3
											</span>
      </div>
    </div>
    <!--  col-xs-12 col-sm-12 col-md-12 -->


    <!--  blog detail content section -->
    <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="ms-blog-brief">
        <!-- below is an image inside a blog -->
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail('full', ['class' => 'ms-img-blog-detail-pg']); ?>
        <?php endif; ?>

        <?php the_content( ); ?>
      </div>

    </div>
    <!-- col-xs-12 col-sm-6 col-md-5  -->
    <!--  blog detail content section -->
  </div>
  <!--panel-body  -->
  <div class="panel-footer ms-hide-post-share">
    <div class="ms-share-post-wrap">
      <div class="ms-share-post-wrapper">
        <p class="ms-label-share-it">
          <?php get_template_part( 'partials/sharebuttons' ) ;?>
        </p>
      </div>
    </div>
    <!--  ms-share-post-wrap  -->
  </div>
  <!--  panel-footer -->
</div>
<!--  ms-blog-brief-wrap -->
<!-- blog in detail section -->

<div class="ms-bk-to-home-bottom-wrap">
  <a href="#" class="ms-bk-to-home">
									<i class="fa fa-long-arrow-left"></i> Home
								</a>
</div>
<!--  ms-bk-to-home-bottom -->