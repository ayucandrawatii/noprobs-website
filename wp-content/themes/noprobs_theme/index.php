<?php get_header(); ?>
<section class="noprobs-content about">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-lg-6">
        <div class="content-about">
          <h2><?php echo $my_redux['title-section1']; ?></h2>
          <h3><?php echo $my_redux['subtitle-section1']; ?></h3>
          <?php echo apply_filters('the_content', $my_redux['description-section1']); ?>
        </div>
        <div class="cta-group">
          <a href="#" class="limegreen-btn" data-toggle="modal" data-target="#enquire-form">SCHEDULE A JOB</a>
          <a href="tel:<?php echo str_replace(' ', '', $my_redux['phone-number']) ?>" class="blue-btn">CALL US NOW</a>
        </div>
      </div>
      <div class="col-12 col-lg-6 pr-custom">
        <div class="img-box"></div>
      </div>
    </div>
  </div>
</section>
<section class="noprobs-content wcu">
  <div class="container">
    <img src="<?php echo $my_redux['subtitle-section2']['url']; ?>" alt="">
  </div>
  <div class="container">
    <div class="row justify-content-betwen">
      <div class="col-12 col-lg-6 position-static">
        <h2><?php echo $my_redux['title-section2']; ?></h2>
        <div class="logo-img">
          <img src="<?php echo $my_redux['logo-image']['url']; ?>" alt="">
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="box-desc">
          <?php echo apply_filters('the_content', $my_redux['description-section2']); ?>
        </div>
      </div>
    </div>
    <div class="row">
      <?php foreach ($my_redux['wcu-section2'] as $value) :?>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="wcu-content">
          <h5><?php echo $value['title'] ?></h5>
          <p><?php echo $value['description'] ?></p>
        </div>
      </div>
      <?php endforeach ?>
      <div class="col-12">
        <div class="cta-phone justify-content-center">
          <a href="tel:<?php echo str_replace(' ', '', $my_redux['phone-number']) ?>" class="blue-btn">CALL US NOW</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="noprobs-content services">
  <div class="container">
    <div class="row justify-content-between align-items-end mb-5">
      <div class="col-12 col-lg-auto">
        <div class="title-box">
          <h2><?php echo $my_redux['title-section3']; ?></h2>
          <h3 class="mb-0"><?php echo $my_redux['subtitle-section3']; ?></h3>
        </div>
      </div>
      <div class="col-12 col-lg-auto">
        <div class="desc-box">
          <?php echo apply_filters('the_content', $my_redux['description-section3']); ?>
        </div>
      </div>
    </div>
    <div class="row">
      <?php $num = 0 ?>
      <?php foreach ($my_redux['service-section3'] as $value) :?>
        <?php $num++ ?>
        <div class="col-12 col-md-6 col-lg-4">
          <a href="<?php echo $value['url'] ?>">
            <div class="content-wrap">
              <div class="content box<?= $num ?>">
                <div class="box-h5">
                  <h5 class="mb-0"><?php echo $value['title'] ?></h5>
                </div>
              </div>
              <div class="content-details">
                <div class="position-relative h-100">
                  <div class="num-box">
                    <p class="text-white">0<?= $num ?></p>
                  </div>
                  <div class="desc-box-service">
                    <h5><?php echo $value['title'] ?></h5>
                    <p class="text-white mb-0"><?php echo $value['description'] ?></p>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
<section class="cta">
  <img src="<?php echo $my_redux['img-section4']['url']; ?>" alt="">
  <div class="noprobs-content">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <h2><?php echo $my_redux['title-section4']; ?></h2>
          <h3 class="mb-0"><?php echo $my_redux['subtitle-section4']; ?></h3>
        </div>
        <div class="col-12 col-lg-6">
          <div class="content-wrap">
            <?php echo apply_filters('the_content', $my_redux['description-section4']); ?>
            <div class="cta-group">
              <a href="#" class="limegreen-btn" data-toggle="modal" data-target="#enquire-form">SCHEDULE A JOB</a>
              <a href="tel:<?php echo str_replace(' ', '', $my_redux['phone-number']) ?>" class="ghost-btn">CALL US NOW</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact">
  <img src="<?php echo $my_redux['img-section5']['url']; ?>" alt="">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-lg-6">
        <div class="content-wrap">
          <h2><?php echo $my_redux['title-section5']; ?></h2>
          <h3><?php echo $my_redux['subtitle-section5']; ?></h3>
          <?php echo apply_filters('the_content', $my_redux['description-section5']); ?>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="form-box">
          <h2><?php echo $my_redux['title2-section5']; ?></h2>
          <?php echo do_shortcode( '[contact-form-7 id="'.$my_redux['enquire-form'].'"]' ); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();
