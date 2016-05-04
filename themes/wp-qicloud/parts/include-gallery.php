<div class="block-gallery">



<?php $teste = get_sub_field('acf_block_gallery_content'); ?>




 <div class="owl-carousel-gallery owl-carousel owl-theme">
 			  <?php // check if the repeater field has rows of data
				if( have_rows('acf_block_gallery_repeater') ):
			 	    while ( have_rows('acf_block_gallery_repeater') ) : the_row(); ?>
			 	 <div class="row">
			 				<div class="medium-4 columns">
						 				<?php $galleryImage = get_sub_field('acf_block_gallery_image');
											if( !empty($galleryImage) ): ?>
												<img  class="block-gallery-image"  src="<?php echo $galleryImage['url']; ?>" alt="<?php echo $galleryImage['alt']; ?>" />
										<?php endif; ?>
							</div> <!--// medium-4 columns -->


							<div class="medium-8 columns">
								<div class="block-gallery-content">
									<?php echo $teste; ?>

									<span class="block-gallery-content-space"></span>
									<h2><?php the_sub_field('acf_block_gallery_title'); ?></h2>
									<h3><?php the_sub_field('acf_block_gallery_author'); ?></h3>
									<p>	<strong>Depoimento do cliente:</strong> <?php the_sub_field('acf_block_gallery_user_testimonial'); ?></p>
									<p class="block-gallery-content--link-access"><a class=" section__button section__button--green section__button--small" href="<?php the_sub_field('acf_block_gallery_url'); ?>" target="_blank">Confira na galeria de projetos </a></p>
                      <?php // check if the repeater field has rows of data
                      if( have_rows('acf_block_gallery_tags_repeater') ): ?>
                      <p class="block-gallery-content-lists"><strong>Principais módulos utilizados:</strong></p>
                            <ul class="list-tags">
                              <?php while ( have_rows('acf_block_gallery_tags_repeater') ) : the_row(); ?>
                           <li class="list-tags-item"> <?php the_sub_field('acf_block_gallery_tags_repeater_item'); ?>   </li>
                      <?php endwhile;   ?>
                       </ul>
                      <?php else :
                      endif; ?>
							    </div> <!-- //block-gallery-content -->
							</div> <!--// medium-8 columns -->

 </div> <!-- // row -->

				<?php endwhile;
		  		else :
		  		endif; ?>


 </div> <!-- // owl-carousel -->

</div>
