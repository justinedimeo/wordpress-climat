<?php get_header(); ?>

<div style="width: 100%;" class="ml-slider-3-10-0 metaslider metaslider-responsive metaslider-43 ml-slider ms-theme-blend has-dots-nav">

  <div id="metaslider_container_43">
    <ul id='metaslider_43' class='rslides'>
      <?php
    $args =  array(
      'post_type' => 'slide',
      'posts_per_page' => 6
    );
    $the_query = new WP_Query( $args );
    if($the_query-> have_posts())
    {
      while($the_query-> have_posts())
      {
        $the_query-> the_post(); ?>
      <li>
        <?php 
        $image = get_field('background');
        if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"
          height="300" width="900" alt="" class="slider-43" title="bg02" />
        <?php endif; ?>
        <div class="card">
          <div class="caption">
            <h3>Chapitre
              <?php if( get_field('numero_de_chapitre') ): the_field('numero_de_chapitre'); endif;?>
            </h3>
            <h1>
              <?php the_title(); ?>
            </h1>
            <p>
              <?php the_content();?>
            </p>
            <a href="<?php the_permalink(); ?>">Découvrir</a>
          </div>
        </div>
      </li>
      <?
      }

    }
    else{
      echo __( "No item", 'test' );
    }
     wp_reset_postdata();
    ?>
    </ul>

  </div>
</div>

<script type='text/javascript'>
  var metaslider_43 = function ($) {
    $('#metaslider_43').responsiveSlides({
      timeout: 3000,
      pager: true,
      nav: true,
      pause: false,
      speed: 600,
      prevText: '<i class="left"></i>',
      nextText: '<i class="right"></i>',
      auto: false
    });
    $(document).trigger('metaslider/initialized', '#metaslider_43');
  };
  var timer_metaslider_43 = function () {
    var slider = !window.jQuery ? window.setTimeout(timer_metaslider_43, 100) : !jQuery.isReady ? window.setTimeout(
      timer_metaslider_43, 1) : metaslider_43(window.jQuery);
  };
  timer_metaslider_43();
</script>

<?php get_footer(); ?>