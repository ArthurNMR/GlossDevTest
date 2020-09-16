<!-- RENDER BUTTON -->
<?php
if ($btn_array) :
    $btn_url = $btn_array['url'];
    $btn_title = $btn_array['title'];
    $btn_target = $btn_array['target'] ? $btn_array['target'] : '_self';
?>
    <a href="<?php echo esc_url($btn_url); ?>" target="<?php echo esc_attr($btn_target); ?>">
        <button class="btn-general"><?php echo esc_html($btn_title); ?></button>
    </a>
<?php endif; ?>