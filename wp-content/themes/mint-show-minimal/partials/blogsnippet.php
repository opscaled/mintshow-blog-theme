<!--  blog snippet 1 -->
<div class="panel panel-default ms-blog-brief-wrap">
  <div class="panel-heading">
    <small>
      <i class="fa fa-clock-o"></i> <?php the_time('F j, Y'); ?>
    </small>
    <h3 class="panel-title">
      <?php the_title(); ?>
    </h3>
  </div>  <!--  panel-heading  -->
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
    </div>  <!--  col-xs-12 col-sm-12 col-md-12 -->

    <!--  blog img section -->
    <div class="col-xs-12 col-sm-12 col-md-7">
    <?php if ( has_post_thumbnail() ) : ?>
       <?php the_post_thumbnail('medium', ['class' => 'img-responsive ms-blog-img']); ?>
    <?php endif; ?>
    </div>
     <!--  blog img section -->
    <!--  blog content section -->
    <div class="col-xs-12 col-sm-12 col-md-5">
      <div class="ms-blog-brief">
        <?php the_excerpt(); ?>
      </div>

    </div>  <!-- col-xs-12 col-sm-6 col-md-5  -->
     <!--  blog content section -->
  </div>  <!--panel-body  -->
  <div class="panel-footer">
    <div class="ms-share-post-wrap">
    <div class="ms-share-post-wrapper">
      <p class="ms-label-share-it">
        <?php get_template_part( "partials/sharebuttons", get_post_format() ); ?>
      </p>
    </div>
    </div>
  </div> <!--  panel-footer -->
</div>  <!--  ms-blog-brief-wrap -->