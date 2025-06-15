<?php
/**
 * The template for displaying search results pages
 */

get_header();
?>

<main class="search-results">
    <header class="search-header">
        <h1 class="search-title">
            <?php
            printf(
                /* translators: %s: search query. */
                esc_html__('Search Results for: %s', 'immigrant-knowhow'),
                '<span>' . get_search_query() . '</span>'
            );
            ?>
        </h1>
    </header>

    <?php if (have_posts()) : ?>
        <div class="search-form-container">
            <?php get_search_form(); ?>
        </div>

        <div class="posts-grid">
            <?php
            while (have_posts()) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    <?php endif; ?>

                    <div class="post-content">
                        <header class="entry-header">
                            <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>

                            <div class="entry-meta">
                                <span class="posted-on">
                                    <?php echo get_the_date(); ?>
                                </span>
                                <span class="byline">
                                    <?php _e('by', 'immigrant-knowhow'); ?> <?php the_author(); ?>
                                </span>
                            </div>
                        </header>

                        <div class="entry-summary">
                            <?php the_excerpt(); ?>
                        </div>

                        <footer class="entry-footer">
                            <?php if (has_category()) : ?>
                                <div class="cat-links">
                                    <?php the_category(', '); ?>
                                </div>
                            <?php endif; ?>
                        </footer>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <?php
        the_posts_pagination(array(
            'prev_text' => __('Previous page', 'immigrant-knowhow'),
            'next_text' => __('Next page', 'immigrant-knowhow'),
        ));

    else :
        ?>
        <div class="no-results">
            <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'immigrant-knowhow'); ?></p>
            <div class="search-form-container">
                <?php get_search_form(); ?>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php
get_footer(); 