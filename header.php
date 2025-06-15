<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="navbar">
    <div class="nav-left">
        <?php
        if (has_custom_logo()) {
            the_custom_logo();
        } else {
        ?>
            <span class="logo-icon">💬</span>
            <span class="logo-text"><?php bloginfo('name'); ?></span>
        <?php } ?>
    </div>
    
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'nav-links',
        'fallback_cb' => false,
    ));
    ?>
    
    <div class="nav-right">
        <?php if (!is_user_logged_in()) : ?>
            <a href="<?php echo wp_login_url(); ?>" class="nav-login"><?php _e('Log in', 'immigrant-knowhow'); ?></a>
            <a href="<?php echo wp_registration_url(); ?>" class="nav-btn"><?php _e('Get Started', 'immigrant-knowhow'); ?></a>
        <?php else : ?>
            <a href="<?php echo wp_logout_url(home_url()); ?>" class="nav-login"><?php _e('Log out', 'immigrant-knowhow'); ?></a>
            <a href="<?php echo get_edit_profile_url(); ?>" class="nav-btn"><?php _e('My Profile', 'immigrant-knowhow'); ?></a>
        <?php endif; ?>
    </div>
</nav> 