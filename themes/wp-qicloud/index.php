<?php get_header(); ?>

 


 
<div class="row_">
	<div class="small-12 columns">
	<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-4 page-thumbnail__list">

		<?php
		$hotsites_in_front = new WP_Query( array(
			'showposts' => 0 ,
			'post_type' => 'page',
			) );
		?>

		<?php if ($hotsites_in_front->have_posts() ) { ?>
			<?php while ( $hotsites_in_front->have_posts() ) : $hotsites_in_front->the_post(); ?>

							<?php if (get_field('acf_page_show_in_home') == true) {  ?>
							<!-- Exibir na página inicial? -->
							<li>
								<div class="page-thumbnail__item card">
								<a href="<?php the_permalink(); ?>" class="page-thumbnail__item--link">
									<?php $pageThumbnail = get_field('acf_page_thumbnail');
										if( !empty($pageThumbnail) ): ?>
										<img src="<?php echo $pageThumbnail['url']; ?>" alt="<?php echo $pageThumbnail['alt']; ?>" />
									<?php endif; ?>
									 <span class="page-thumbnail__title"> <?php the_title(); ?> </span>
								 </a>

									</div><!-- //page-thumbnail-item -->
							</li>
							<?php  } else {  ?>
							<!-- Esconder na página inicial? -->
								<?php  } ?>

			<?php endwhile;  ?>
		<?php } else { ?>
			<p>Oie</p>
		<?php } ?>

		<?php wp_reset_query();  ?>

</ul>

	</div><!-- //small-12 columns -->
</div><!-- //row -->
<?php get_footer(); ?>
