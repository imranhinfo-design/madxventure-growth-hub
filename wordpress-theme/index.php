<?php
/**
 * The main template file
 *
 * @package MadXventure
 */

get_header();
?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="container section">
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
<?php else : ?>
    <div class="container section">
        <p><?php esc_html_e('No content found.', 'madxventure'); ?></p>
    </div>
<?php endif; ?>

<?php
get_footer();
