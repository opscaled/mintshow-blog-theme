<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
  <title>Mint Show - <?php wp_title('', true,''); ?> </title>

  <?php wp_head(); ?>
</head>

<body>
  <div class="ms-banner-wrapper">

    <!--  below is the mint-show logo -->
    <div class="ms-banner-logo-wrap">
      <img src="<?php bloginfo('template_url'); ?>/img/mint-show-logo.png" class="img-responsive ms-banner-logo">
    </div>
    <!-- ms-banner-logo-wrap -->

  </div>
  <!--  ms-banner-wrapper -->

  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 ms-blog-content-wrapper">

        <div class="row">

          <!--  this column is for widget section -->
          <div class="col-sm-4">
            <div class="ms-widgets-wrapper">

              <!--  Note: WIDGETS should be put inside this col-sm-4 column and "ms-widgets-wrapper" div -->
              <?php if ( !is_404() ): dynamic_sidebar( 'left_sidebar_1' ); endif;?>

            </div>
            <!-- ms-widgets-wrapper -->
          </div>
          <!--  col-sm-4 -->
          <!--  this column is for widget section -->

          <!--  this column is for content -->
          <div class="col-sm-8">
