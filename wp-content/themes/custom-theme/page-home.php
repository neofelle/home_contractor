<?php
/**
Template Name: Homepage
 */
?>
<?php get_header(); ?>
<section class="slider clear" style="position: relative;bottom: 6px;">
    <div class="large-12 columns">
        <?php 
            $slider_data = $wpdb->get_results("SELECT  meta_value FROM wp_postmeta WHERE post_id =62 AND meta_key ='nivo_settings' LIMIT 1"); 
            $slider_settings   = unserialize($slider_data[0]->meta_value);
            $slider_images_ids = $slider_settings['manual_image_ids'];
            $slider_images     = $wpdb->get_results("SELECT  guid, post_excerpt FROM wp_posts WHERE id IN(" . $slider_images_ids . ")");                
        ?>
        <div class="owl-carousel owl-1 owl-theme">
            <?php foreach( $slider_images as $i ){ ?>
               <div class="item slider-bg" style="height:550px;display: block;background-size:cover;background-image: url('<?php echo $i->guid; ?>')">   
                    <div class="container owl-slider">
                        <div class="col-md-12 no-space">
                            <div class="col-md-6 banner-1-left left  sl-1">
                                <h1 class="slider-h1">We Are Professional &</h1>
                                <h1 class="slider-h1">Thoughful HandyMan</h1>
                            </div>
                            <div class="col-md-6 form-container form-home left">
                                <div class="form-1" style="background-color: #1d2f5d;height: 100%;width: 80%;padding-top: 1px;margin-top: 35px;float: right;">
                                    <div class="form-title" style="background-color: #1d2f5d !important;background-color: #1d2f5d !important;padding-bottom: 15px;border-bottom: 1px solid #3f61b9;">
                                        <h3 class="text-white center text-form-title uppercase">Sign up to receive</h3> 
                                        <h3 class="text-white center text-form-title-2 uppercase">special offer</h3>
                                    </div>
                                    <div style="padding:20px;text-align: center;">
                                        <?php echo do_shortcode( '[contact-form-7 id="66" title="Contact form 1"]' ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>       
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>  
<section class="services">
<div class="container content">
    <h2 class="title">OUR SERVICES</h2>
    <br class="clear">
    <div class="col-md-12">
        <?php    
            $args = array(
            'post_type' => 'services',
            'posts_per_page' => 9,
            'order' => 'ASC'
            );
             
            $the_query = new WP_Query( $args );
             
            if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $cf_excerpt = get_post_meta($post->ID, 'services_excerpt', $single);            
        ?>

            <?php 
                $image = "";
                if (has_post_thumbnail( $post->ID ) ){
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                }
            ?>

            <div class="col-xs-12 col-sm-6 col-md-4 left service-item">
              <a href="<?php echo $post->guid; ?>">    
                <img class="cover" src="<?php echo $image[0]; ?>"/>
                <h1 class="service-text uppercase center"><?php echo get_the_title(); ?></h1>
              </a>
            </div>
        <?php
            }
            } else {
            // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();         
        ?>
    </div>
</div>
</section>
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
<?php get_footer(); ?>