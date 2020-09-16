<!-- NEWSLETTER SNIPPET -->
<div class="section-newsletter">
    <div class="col-12 offset-lg-1 col-lg-10 newsletter-container">
        <div class="row">
            <div class="col-12 col-lg-8 col-md-12 content">
                <h3><?php echo get_field('news_letter_description',5); ?></h3>
            </div>
            <div class="col-12 col-lg-4 col-md-12 newsletter-button">
                <?php
                $btn_array = get_field('news_letter_button',5);
                set_query_var('btn_array', $btn_array);
                get_template_part('includes/section', 'btnrender');
                ?>
            </div>
        </div>
    </div>
</div>