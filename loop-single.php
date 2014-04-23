<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<style id="s" type="text/css">
<?php $key="css"; echo get_post_meta($post->ID, $key, true); ?>
</style>

<div id="pattern" class="mod group">
			<h3 class="label">Pattern</h3> 
			
			<h4><?php the_category(' '); ?> <span class="sep">&rarr;</span> <?php the_title(); ?></h4>
            <p class="author">Added by <strong><?php the_author_meta('display_name'); ?></strong></p>
			
            <?php if(get_post_meta($post->ID, 'html', true) != "" || get_post_meta($post->ID, 'css', true) != "" || get_post_meta($post->ID, 'javascript', true) != "") {?>
			<div id="pattern-wrap" class="group">
<?php $key="html"; echo get_post_meta($post->ID, $key, true); ?>
			</div>
            <?php } ?>
		</div>

        <?php if(get_post_meta($post->ID, 'html', true) != "" || get_post_meta($post->ID, 'css', true) != "") {?>
		<div class="group">
			<div id="markup" class="mod">
				<h3 class="label">HTML</h3> <a href="#" class="clip" title="select code for copying"><img src="<?php bloginfo('template_directory'); ?>/images/icon-copy.png" alt="copy" /></a>
				<textarea class="mod-ta">
<?php $key="html"; echo get_post_meta($post->ID, $key, true); ?>			
				</textarea>
			</div>
			
			<div id="style" class="mod">
				<h3 class="label">CSS</h3> <a href="#" class="clip" title="select code for copying"><img src="<?php bloginfo('template_directory'); ?>/images/icon-copy.png" alt="copy" /></a>
				<textarea id="css-code" class="mod-ta">
<?php $key="css"; echo get_post_meta($post->ID, $key, true); ?>
				</textarea>
			</div>
		</div>
        <?php } ?>

        <?php $key="javascript"; if(get_post_meta($post->ID, $key, true) != "") {?>
        <div class="group">
			<div id="behavior" class="mod">
				<h3 class="label">JAVASCRIPT</h3> <a href="#" class="clip" title="select code for copying"><img src="<?php bloginfo('template_directory'); ?>/images/icon-copy.png" alt="copy" /></a>
				<textarea class="mod-ta">
<?php $key="javascript"; echo get_post_meta($post->ID, $key, true); ?>			
				</textarea>
			</div>
		</div>
        <?php } ?>
		
		<?php if($post->post_content != "") {?>
		<div id="pattern-notes" class="mod">
			<h3 class="label">Notes</h3>
			<?php the_content(); ?>
		</div>
		<?php } ?>

<script id="j" type-"text/javascript">
<?php $key="javascript"; echo get_post_meta($post->ID, $key, true); ?>
</script>

<?php endwhile; // end of the loop. ?>