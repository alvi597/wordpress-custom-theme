<?php
/**
 * The main template file
 */

get_header();
?>

<main>
    <section class="hero">
        <h1><?php echo get_theme_mod('hero_title', 'A Community Platform for New Immigrants'); ?></h1>
        <p><?php echo get_theme_mod('hero_description', 'Join forums, access expert support, and marketplace services designed to help immigrants settle in new country.'); ?></p>
        <a href="<?php echo esc_url(get_theme_mod('hero_button_link', '#')); ?>" class="main-btn"><?php echo esc_html(get_theme_mod('hero_button_text', 'Get Started')); ?></a>
    </section>

    <section class="explore">
        <div class="explore-bar">
            <?php get_search_form(); ?>
        </div>
        <div class="tags" id="tagsTop">
            <?php
            $tags = get_tags(array('number' => 8));
            if ($tags) {
                foreach ($tags as $tag) {
                    echo '<span class="tag"><a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . esc_html($tag->name) . '</a></span>';
                }
            }
            ?>
            <span class="tag view-all"><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"><?php _e('View all', 'immigrant-knowhow'); ?></a></span>
        </div>
    </section>

    <section class="features">
        <?php
        $features = array(
            array(
                'icon' => '💬',
                'title' => __('Expert Support', 'immigrant-knowhow'),
                'description' => __('Get professional advice on legal, financial, and health issues from vetted experts.', 'immigrant-knowhow')
            ),
            array(
                'icon' => '📄',
                'title' => __('Inspirational Stories', 'immigrant-knowhow'),
                'description' => __('Read stories of immigrants who have successfully established themselves and their families.', 'immigrant-knowhow')
            ),
            array(
                'icon' => '🔔',
                'title' => __('Marketplace Services', 'immigrant-knowhow'),
                'description' => __('Find pet sitting and guided tours offered by trusted members of the community.', 'immigrant-knowhow')
            )
        );

        foreach ($features as $feature) {
            ?>
            <div class="feature">
                <div class="feature-icon"><?php echo esc_html($feature['icon']); ?></div>
                <h3><?php echo esc_html($feature['title']); ?></h3>
                <p><?php echo esc_html($feature['description']); ?></p>
            </div>
            <?php
        }
        ?>
    </section>

    <section class="tags-section">
        <div class="tags" id="tagsBottom">
            <?php
            if ($tags) {
                foreach ($tags as $tag) {
                    echo '<span class="tag"><a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . esc_html($tag->name) . '</a></span>';
                }
            }
            ?>
            <span class="tag view-all"><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"><?php _e('View all', 'immigrant-knowhow'); ?></a></span>
        </div>
    </section>
</main>

<?php
get_footer(); 