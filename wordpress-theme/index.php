<?php
/**
 * The main template file
 * 
 * This template redirects to front-page content when on homepage
 *
 * @package MadXventure
 */

// If this is the front page, load the front-page template content
if (is_front_page() || is_home()) {
    get_template_part('front-page');
    exit;
}

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
