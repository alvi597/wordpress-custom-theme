<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

<main class="single-post">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                
                <div class="entry-meta">
                    <span class="posted-on">
                        <?php echo get_the_date(); ?>
                    </span>
                    <span class="byline">
                        <?php _e('by', 'immigrant-knowhow'); ?> <?php the_author(); ?>
                    </span>
                    <?php if (has_category()) : ?>
                        <span class="cat-links">
                            <?php _e('in', 'immigrant-knowhow'); ?> <?php the_category(', '); ?>
                        </span>
                    <?php endif; ?>
                </div>
            </header>

            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="entry-content">
                <?php
                the_content();

                wp_link_pages(array(
                    'before' => '<div class="page-links">' . __('Pages:', 'immigrant-knowhow'),
                    'after'  => '</div>',
                ));
                ?>
            </div>

            <footer class="entry-footer">
                <?php
                if (has_tag()) {
                    echo '<div class="tags-links">';
                    the_tags('', ', ');
                    echo '</div>';
                }
                ?>
            </footer>
        </article>

        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

        // Previous/next post navigation.
        the_post_navigation(array(
            'prev_text' => '<span class="nav-subtitle">' . __('Previous:', 'immigrant-knowhow') . '</span> <span class="nav-title">%title</span>',
            'next_text' => '<span class="nav-subtitle">' . __('Next:', 'immigrant-knowhow') . '</span> <span class="nav-title">%title</span>',
        ));

    endwhile;
    ?>
</main>

<?php
get_footer(); 