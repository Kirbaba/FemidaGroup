<? get_header()?>
<div class="wrapper">
	<div class="content">
		<div class="contain">
			<? get_sidebar()?>
			<section class="page">
				<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<?php if ( has_post_thumbnail() ): ?>
			                <div class="page__thumb">
			                    <?php { echo get_the_post_thumbnail( $id, '100%', array('class' => 'alignleft') ); }?>
			                </div>
			            <?php  endif;?>
						<?php the_content(); ?>
						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</section>

			<?php get_template_part('contacts'); ?>
		</div>
<? get_footer()?>