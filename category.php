<? get_header()?>
<div class="wrapper">
	<div class="content">
		<div class="contain">
			<? get_sidebar()?>
			<section class="page">
				<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
				 <!-- Имеются ли посты для отображения? -->
				 <div class="categorys">   
            <?php if ( have_posts() ) : ?>
                <!-- Цикл вывода постов -->
            <?php while ( have_posts() ) : the_post(); ?>
               
                                        
                        <a href="<?php the_permalink() ?>" class="toRecipe"><?php the_title(); ?></a>                       
                                
                
            <?php endwhile; // конец цикла?>
				<?php endif; ?>
				  </div>  
			</section>
			<?php get_template_part('contacts'); ?>
		</div>
<? get_footer()?>