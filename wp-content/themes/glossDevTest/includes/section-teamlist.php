<?php
/* GET TEAM POST DATA */
$args = array(
  'post_type' => 'our_team',
  'post_status'    => 'publish',
  'orderby' => 'date',
  'posts_per_page' => 0
);
$team = new WP_Query($args);
?>
<div class="col-12 team-body">
  <div class="row">
    <?php
    if ($team->have_posts()) {
      while ($team->have_posts()) {
        $team->the_post();
    ?>
        <div class="col-12 col-lg-3 col-md-6 team">
          <div class="row">
            <div class="col-6 col-lg-12 team-profile">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="col-6 col-lg-12 team-details">
              <div class="details">
                <h3><?php the_title() ?></h3>
                <p><?php echo get_field('position') ?></p>
              </div>
            </div>
          </div>
        </div>

    <?php
      }
    } else {
      echo 'No Result..';
    }
    ?>
  </div>
</div>