<?php
/**
 * The template for displaying archive pages
 */

get_header();
?>

<main class="archive-page">
    <header class="archive-header">
        <?php
        the_archive_title('<h1 class="archive-title">', '</h1>');
        the_archive_description('<div class="archive-description">', '</div>');
        ?>
    </header>

    <?php if (have_posts()) : ?>
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
        <p><?php _e('No posts found.', 'immigrant-knowhow'); ?></p>
    <?php endif; ?>
</main>

<?php
get_footer(); 