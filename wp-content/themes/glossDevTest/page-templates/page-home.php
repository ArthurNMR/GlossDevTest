<?php
/*
    Template Name: Home Page
*/
get_header();
?>

<div class="page-home-container">
    <!-- BANNER -->
    <div class="section-home-banner" style="background-image:url('<?php echo the_post_thumbnail_url(); ?>');">
        <div class="col-12 offset-lg-1 col-lg-10 banner-container">
            <div class="banner-body">
                <div class="col-12 col-lg-6 banner-content">
                    <?php the_content(); ?>
                </div>
                <div class="col-12 col-lg-6 banner-button">
                    <?php
                    $btn_array = get_field('banner_button');
                    set_query_var('btn_array', $btn_array);
                    get_template_part('includes/section', 'btnrender');
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- COURSE -->
    <div class="section-course">
        <div class="col-12 offset-lg-1 col-lg-10 course-container">
            <div class="row h-100">
                <div class="col-12 col-lg-6 col-md-6 course-img">
                    <img src="<?php echo get_field('first_section_content_image'); ?>" alt="">
                </div>
                <div class="col-12 col-lg-6 col-md-6 course-content">
                    <div class="content-body">
                        <div class="content">
                            <?php echo get_field('first_section_content'); ?>
                        </div>
                        <div class="course-button">
                            <?php
                            $btn_array = get_field('first_section_content_button');
                            set_query_var('btn_array', $btn_array);
                            get_template_part('includes/section', 'btnrender');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ABOUT -->
    <div class="section-about" s>
        <div class="col-12 offset-lg-1 col-lg-10 about-container">
            <div class="row h-100">
                <div class="col-12 col-lg-6 col-md-6 about-content">
                    <div class="content-body">
                        <div class="content">
                            <?php echo get_field('second_section_content'); ?>
                        </div>
                        <div class="about-button">
                            <?php
                            $btn_array = get_field('second_section_content_button');
                            set_query_var('btn_array', $btn_array);
                            get_template_part('includes/section', 'btnrender');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6 about-img">
                    <img src="<?php echo get_field('second_section_content_image'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- TEAM -->
    <div class="section-team">
        <div class="col-12 offset-lg-1 col-lg-10 team-container">
            <div class="row">
                <div class="col-12 col-lg-12 team-content">
                    <div class="content-body">
                        <div class="content">
                            <?php echo get_field('our_team_description'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 team-list">
                    <?php get_template_part('includes/section', 'teamlist'); ?>
                </div>
            </div>
        </div>
    </div>


</div>


<?php
get_footer();
?>