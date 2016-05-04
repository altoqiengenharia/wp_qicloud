<div class="block-modules-list">
	<div class="row">






<div class="medium-4 columns">
	<?php /*contadores */ $i=0;	$id=0;?>
 <?php if( have_rows('acf_block_module_list_colum_1') ):  while ( have_rows('acf_block_module_list_colum_1') ) : the_row(); ?>
	 	<?php /*contadores */ 	$id++;?>

		<div class="block-modules-list__group">
			<h3 class="block-modules-list__title"> <?php the_sub_field('acf_block_module_list_colum_1_title'); ?>  </h3>
				<ul class="block-modules-list__items">
			  		<?php if( have_rows('acf_block_module_list_colum_1_list') ): while ( have_rows('acf_block_module_list_colum_1_list') ) : the_row();  ?>
								<?php /*contadores */  $id++;?>
							<li class="block-modules-list__item">
								<?php if (get_sub_field('acf_block_module_list_colum_1_list_item_description') OR get_sub_field('acf_block_module_list_colum_1_list_item_video') OR get_sub_field('acf_block_module_list_colum_1_list_item_gallery') ) {  ?>
								 <a  data-reveal-id="modal-lista-modulos-<?php echo $id; ?>" class="block-modules-list__item--link" href="#<?php echo $id; ?>" target="_blank"><?php the_sub_field('acf_block_module_list_colum_1_list_item'); ?></a>

								 								 <!--   inicia modal -->
								 							 		<div id="modal-lista-modulos-<?php echo $id; ?>" class="reveal-modal medium" data-reveal aria-labelledby="videoModalTitle" aria-hidden="true" role="dialog">
								 							 			 <div class="modal__midia">
								 							 						 <div  class="owl-carousel-single owl-carousel owl-theme">
								 							 								 <?php $acfBlockmoduleListmoduleVideo = get_sub_field('acf_block_module_list_colum_1_list_item_video');
								 							 									 if( ($acfBlockmoduleListmoduleVideo) ): ?>
								 							 									 <div class="item">
								 							 												 <div class="flex-video widescreen vimeo">
								 							 														<?php// echo $acfBlockmoduleListmoduleVideo; ?>
																													<?php $iframeVideoOriginal = $acfBlockmoduleListmoduleVideo;
																		                            $novoIframe = str_replace('?feature=oembed', '?rel=0', $iframeVideoOriginal);
																		                       echo $novoIframe;  ?>
								 							 												 </div> <!-- //flex-video -->
								 							 										 </div><!-- //item -->
								 							 									 <?php endif;  ?>

								 							 									 <?php $images = get_sub_field('acf_block_module_list_colum_1_list_item_gallery');
								 							 									 if( $images ): ?>
								 							 								 <?php foreach( $images as $image ): ?>
								 							 										 <div class="item">
								 							 												 <!-- <a href="<?php echo $image['url']; ?>"> -->
								 							 															<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
								 							 												 <!-- </a> -->
								 							 												 <p class="owl-carousel-caption"><?php echo $image['caption']; ?></p>
								 							 										 </div>
								 							 								 <?php endforeach; ?>
								 							 						 </div>
								 							 				 <?php endif; ?>
								 							 		 </div> <!-- // modal-midia -->
								 							 					<div class="modal__conteudo">
								 							 						<hr class="small-12 columns modal__conteudo--separador">
								 							 						 <div class="large-5 columns">
								 							 									 <h2 id="modal-title" class="modal__conteudo--title"><?php the_sub_field('acf_block_module_list_colum_1_list_item'); ?> </h2>
								 							 						 </div><!-- //large-4 columns -->
								 							 						 <div class="large-7 columns">
								 							 							 <?php the_sub_field('acf_block_module_list_colum_1_list_item_description');?>
								 							 						 </div><!-- //large-8 columns -->
								 							 					</div> <!-- // modal-conteudo -->
								 							 			<a class="close-reveal-modal" aria-label="Close">&#215;</a>
								 							 		</div> <!-- //fecha modal modal -->

								<?php  } else {  ?>
									<?php the_sub_field('acf_block_module_list_colum_1_list_item'); ?>
								<?php  } ?>

							</li>
		  			<?php endwhile;   else :  /* no rows found */ endif; ?>
		  		</ul>
		</div> <!-- //block-modules-list__group -->
  <?php endwhile;   else : /* no rows found */ endif; ?>
</div> <!-- // large-4 columns -->









<div class="medium-4 columns">
	<?php /*contadores */ $i=0;	$id=0;?>
 <?php if( have_rows('acf_block_module_list_colum_2') ):  while ( have_rows('acf_block_module_list_colum_2') ) : the_row(); ?>
	 	<?php /*contadores */ 	$id++;?>
		<div class="block-modules-list__group">
			<h3 class="block-modules-list__title"> <?php the_sub_field('acf_block_module_list_colum_2_title'); ?>  </h3>
				<ul class="block-modules-list__items">
			  		<?php if( have_rows('acf_block_module_list_colum_2_list') ): while ( have_rows('acf_block_module_list_colum_2_list') ) : the_row();  ?>
								<?php /*contadores */  $id++;?>
							<li class="block-modules-list__item">
								<?php if (get_sub_field('acf_block_module_list_colum_2_list_item_description') OR get_sub_field('acf_block_module_list_colum_2_list_item_video') OR get_sub_field('acf_block_module_list_colum_2_list_item_gallery') ) {  ?>
								 <a  data-reveal-id="modal-lista-modulos-2-<?php echo $id; ?>" class="block-modules-list__item--link" href="#<?php echo $id; ?>" target="_blank"><?php the_sub_field('acf_block_module_list_colum_2_list_item'); ?></a>

								 								 <!--   inicia modal -->
								 							 		<div id="modal-lista-modulos-2-<?php echo $id; ?>" class="reveal-modal medium" data-reveal aria-labelledby="videoModalTitle" aria-hidden="true" role="dialog">
								 							 			 <div class="modal__midia">
								 							 						 <div  class="owl-carousel-single owl-carousel owl-theme">
								 							 								 <?php $acfBlockmoduleListmoduleVideo = get_sub_field('acf_block_module_list_colum_2_list_item_video');
								 							 									 if( ($acfBlockmoduleListmoduleVideo) ): ?>
								 							 									 <div class="item">
								 							 												 <div class="flex-video widescreen vimeo">
								 							 														<?php// echo $acfBlockmoduleListmoduleVideo; ?>
																													<?php $iframeVideoOriginal = $acfBlockmoduleListmoduleVideo;
																																$novoIframe = str_replace('?feature=oembed', '?rel=0', $iframeVideoOriginal);
																													 echo $novoIframe; ?>
								 							 												 </div> <!-- //flex-video -->
								 							 										 </div><!-- //item -->
								 							 									 <?php endif;  ?>

								 							 									 <?php $images = get_sub_field('acf_block_module_list_colum_2_list_item_gallery');
								 							 									 if( $images ): ?>
								 							 								 <?php foreach( $images as $image ): ?>
								 							 										 <div class="item">
								 							 												 <!-- <a href="<?php echo $image['url']; ?>"> -->
								 							 															<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
								 							 												 <!-- </a> -->
								 							 												 <p class="owl-carousel-caption"><?php echo $image['caption']; ?></p>
								 							 										 </div>
								 							 								 <?php endforeach; ?>
								 							 						 </div>
								 							 				 <?php endif; ?>
								 							 		 </div> <!-- // modal-midia -->
								 							 					<div class="modal__conteudo">
								 							 						<hr class="small-12 columns modal__conteudo--separador">
								 							 						 <div class="large-5 columns">
								 							 									 <h2 id="modal-title" class="modal__conteudo--title"><?php the_sub_field('acf_block_module_list_colum_2_list_item'); ?> </h2>
								 							 						 </div><!-- //large-4 columns -->
								 							 						 <div class="large-7 columns">
								 							 							 <?php the_sub_field('acf_block_module_list_colum_2_list_item_description');?>
								 							 						 </div><!-- //large-8 columns -->
								 							 					</div> <!-- // modal-conteudo -->
								 							 			<a class="close-reveal-modal" aria-label="Close">&#215;</a>
								 							 		</div> <!-- //fecha modal modal -->

								<?php  } else {  ?>
									<?php the_sub_field('acf_block_module_list_colum_2_list_item'); ?>
								<?php  } ?>

							</li>
		  			<?php endwhile;   else :  /* no rows found */ endif; ?>
		  		</ul>
		</div> <!-- //block-modules-list__group -->
  <?php endwhile;   else : /* no rows found */ endif; ?>
</div> <!-- // large-4 columns -->






<div class="medium-4 columns">
	<?php /*contadores */ $i=0;	$id=0;?>
 <?php if( have_rows('acf_block_module_list_colum_3') ):  while ( have_rows('acf_block_module_list_colum_3') ) : the_row(); ?>
	 	<?php /*contadores */ 	$id++;?>

		<div class="block-modules-list__group">
			<h3 class="block-modules-list__title"> <?php the_sub_field('acf_block_module_list_colum_3_title'); ?>  </h3>
				<ul class="block-modules-list__items">
			  		<?php if( have_rows('acf_block_module_list_colum_3_list') ): while ( have_rows('acf_block_module_list_colum_3_list') ) : the_row();  ?>
								<?php /*contadores */  $id++;?>
							<li class="block-modules-list__item">
								<?php if (get_sub_field('acf_block_module_list_colum_3_list_item_description') OR get_sub_field('acf_block_module_list_colum_3_list_item_video') OR get_sub_field('acf_block_module_list_colum_3_list_item_gallery') ) {  ?>
								 <a  data-reveal-id="modal-lista-modulos-3-<?php echo $id; ?>" class="block-modules-list__item--link" href="#<?php echo $id; ?>" target="_blank"><?php the_sub_field('acf_block_module_list_colum_3_list_item'); ?></a>

								 								 <!--   inicia modal -->
								 							 		<div id="modal-lista-modulos-3-<?php echo $id; ?>" class="reveal-modal medium" data-reveal aria-labelledby="videoModalTitle" aria-hidden="true" role="dialog">
								 							 			 <div class="modal__midia">
								 							 						 <div  class="owl-carousel-single owl-carousel owl-theme">
								 							 								 <?php $acfBlockmoduleListmoduleVideo = get_sub_field('acf_block_module_list_colum_3_list_item_video');
								 							 									 if( ($acfBlockmoduleListmoduleVideo) ): ?>
								 							 									 <div class="item">
								 							 												 <div class="flex-video widescreen vimeo">
								 							 														<?php //echo $acfBlockmoduleListmoduleVideo; ?>
																													<?php $iframeVideoOriginal = $acfBlockmoduleListmoduleVideo;
																																$novoIframe = str_replace('?feature=oembed', '?rel=0', $iframeVideoOriginal);
																													 echo $novoIframe; ?>
								 							 												 </div> <!-- //flex-video -->
								 							 										 </div><!-- //item -->
								 							 									 <?php endif;  ?>

								 							 									 <?php $images = get_sub_field('acf_block_module_list_colum_3_list_item_gallery');
								 							 									 if( $images ): ?>
								 							 								 <?php foreach( $images as $image ): ?>
								 							 										 <div class="item">
								 							 												 <!-- <a href="<?php echo $image['url']; ?>"> -->
								 							 															<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
								 							 												 <!-- </a> -->
								 							 												 <p class="owl-carousel-caption"><?php echo $image['caption']; ?></p>
								 							 										 </div>
								 							 								 <?php endforeach; ?>
								 							 						 </div>
								 							 				 <?php endif; ?>
								 							 		 </div> <!-- // modal-midia -->
								 							 					<div class="modal__conteudo">
								 							 						<hr class="small-12 columns modal__conteudo--separador">
								 							 						 <div class="large-5 columns">
								 							 									 <h2 id="modal-title" class="modal__conteudo--title"><?php the_sub_field('acf_block_module_list_colum_3_list_item'); ?> </h2>
								 							 						 </div><!-- //large-4 columns -->
								 							 						 <div class="large-7 columns">
								 							 							 <?php the_sub_field('acf_block_module_list_colum_3_list_item_description');?>
								 							 						 </div><!-- //large-8 columns -->
								 							 					</div> <!-- // modal-conteudo -->
								 							 			<a class="close-reveal-modal" aria-label="Close">&#215;</a>
								 							 		</div> <!-- //fecha modal modal -->

								<?php  } else {  ?>
									<?php the_sub_field('acf_block_module_list_colum_3_list_item'); ?>
								<?php  } ?>

							</li>
		  			<?php endwhile;   else :  /* no rows found */ endif; ?>
		  		</ul>
		</div> <!-- //block-modules-list__group -->
  <?php endwhile;   else : /* no rows found */ endif; ?>
</div> <!-- // large-4 columns -->





 <?php
 /*
 // somente para saber o numero de linhas para o bloco números
  if( have_rows('acf_block_numbers') ):
	   $counterNumbers = 0;
	    while ( have_rows('acf_block_numbers') ) : the_row();
	    	$counterNumbers++;
	    endwhile;
	else :
endif;  ?>





<ul class="block-numbers--list medium-block-grid-<?php echo $counterNumbers;?> small-block-grid-1">

 <?php // check if the repeater field has rows of data
	if( have_rows('acf_block_module_list_colum_1') ):

 // loop through the rows of data
	    while ( have_rows('acf_block_numbers') ) : the_row(); ?>

         <li class="block-numbers--list-item ">
         	<strong> <?php the_sub_field('acf_block_numbers_title'); ?> </strong>
         	<span> <?php the_sub_field('acf_block_numbers_subtitle'); ?> </span>
          </li>


  <?php endwhile;

 	else :
	    // no rows found
	endif;
?>
   </ul>


		<?php */ ?>


	</div> <!-- ///row -->
</div> <!-- //block-modules-list -->
