<?php
/**
 * The template for displaying the footer
 */
?>
<footer class="footer modern-footer behance-style-footer">
    <div class="footer-columns-grid">
        <div class="footer-col footer-brand">
            <div class="footer-logo-row">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                ?>
                    <span class="footer-logo-icon">💬</span>
                    <span class="footer-logo-text"><?php bloginfo('name'); ?></span>
                <?php } ?>
            </div>
            <p class="footer-desc"><?php bloginfo('description'); ?></p>
        </div>
        
        <div class="footer-col footer-links">
            <strong class="footer-heading"><?php _e('Quick Links', 'immigrant-knowhow'); ?></strong>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'container' => 'nav',
                'container_class' => 'footer-nav',
                'fallback_cb' => false,
            ));
            ?>
        </div>
        
        <div class="footer-col footer-social">
            <div class="footer-social-heading">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" style="vertical-align:middle;margin-right:7px;">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.974.974 1.246 2.241 1.308 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.308 3.608-.974.974-2.241 1.246-3.608 1.308-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.308-.974-.974-1.246-2.241-1.308-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.062-1.366.334-2.633 1.308-3.608.974-.974 2.241-1.246 3.608-1.308C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.052.072 5.775.13 4.602.388 3.635 1.355 2.668 2.322 2.41 3.495 2.352 4.772.013 8.332 0 8.741 0 12c0 3.259.013 3.668.072 4.948.058 1.277.316 2.45 1.283 3.417.967.967 2.14 1.225 3.417 1.283C8.332 23.987 8.741 24 12 24c3.259 0 3.668-.013 4.948-.072 1.277-.058 2.45-.316 3.417-1.283.967-.967 1.225-2.14 1.283-3.417.059-1.28.072-1.689.072-4.948 0-3.259-.013-3.668-.072-4.948-.058-1.277-.316-2.45-1.283-3.417-.967-.967-2.14-1.225-3.417-1.283C15.668.013 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                </svg>
                <span class="footer-heading"><?php _e('Social', 'immigrant-knowhow'); ?></span>
            </div>
            <div class="footer-social-icons vertical">
                <?php
                $social_links = array(
                    'twitter' => get_theme_mod('social_twitter'),
                    'facebook' => get_theme_mod('social_facebook'),
                    'instagram' => get_theme_mod('social_instagram'),
                    'linkedin' => get_theme_mod('social_linkedin')
                );

                foreach ($social_links as $platform => $url) {
                    if ($url) {
                        echo '<a href="' . esc_url($url) . '" title="' . esc_attr(ucfirst($platform)) . '" aria-label="' . esc_attr(ucfirst($platform)) . '">';
                        get_template_part('template-parts/social-icons/' . $platform);
                        echo '<span class="footer-social-label">' . esc_html(ucfirst($platform)) . '</span>';
                        echo '</a>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <span>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('All rights reserved.', 'immigrant-knowhow'); ?></span>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html> 