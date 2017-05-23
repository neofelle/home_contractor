<section class="banner-section bg-black">
    <div class="row banner" style="padding: 0px !important;background: url('<?php echo get_template_directory_uri() . "/assets/images/home/home-footer-banner-1-min.png"; ?>') no-repeat; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
        <div class="row banner-content" style="padding-top: 50px;padding-bottom: 50px;">
            <div class="container center section-3">
                 <h1 class="txt-banner-footer color-white bold">Sign up to receive Exclusive Specials</h1>    
                 <p class="color-white center" style="font-size: 17px;width: 90%;margin: 0 auto;padding-top: 0px;padding-bottom: 30px;padding-left: 10px;padding-right: 10px;">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>  
                 <a href="#" class="uppercase submit-button-footer"><strong>SIGN UP NOW!</strong></a>    
            </div>
        </div>  
    </div>
</section>
<section class="footer" style="background-color: #1d2f5d;margin-top: 0px;padding-top: 70px !important;padding-bottom: 25px !important;">
  <div class="container footer-content" style="border: 0px;">
    <div class="col-xs-12 col-sm-6 col-md-3 footer-services footer-row left">
      <h4 class="title-footer color-white">QUICK LINKS</h4>
      <?php 
        $menuargs = array(
          "theme_location" => "primary",
          "menu_class" => "s-menu",
          "menu_id" => "footer-a",
        );
        $footer_items = wp_get_nav_menu_items( 'footer-a', $menuargs); 
      ?>
      <?php foreach( $footer_items as $i ){ ?>
        <h4 class="text-footer"><a href="<?php echo $i->url; ?>"><?php echo $i->title; ?></a></h4>
      <?php } ?>      
    </div>
    <div class="col-xs-12 col-sm-6 col-md-5 footer-information footer-row left">
      <h4 class="title-footer color-white">SERVICES</h4>
        <?php 
          $menuargs = array(
            "theme_location" => "primary",
            "menu_class" => "s-menu",
            "menu_id" => "footer-b",
          );
          $footer_items = wp_get_nav_menu_items( 'footer-b', $menuargs); 
        ?>
        <ul class="footer-services-ul">
            <?php foreach( $footer_items as $i ){ ?>
              <li><h4 class="text-footer"><a href="<?php echo $i->url; ?>"><?php echo $i->title; ?></a></h4></li>
            <?php } ?>      
        </ul>
    </div>
      <div class="col-xs-12 col-sm-6 col-md-4 left footer-row">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
        <?php endif; ?> 
    </div>
  </div>
</section>
<section class="footer-copyright" style="background-color: #1d2f5d;padding-top: 0px;padding-bottom: 5px;">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
          <?php endif; ?>
</section>
<?php wp_footer();?>
<!-- jQuery -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.js"></script>
</body>
</html>