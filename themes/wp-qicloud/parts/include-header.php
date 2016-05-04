<!-- |||||||||||||||||||||||| HEADER |||||||||||||||||||||||| -->
<header class="strutcture-header z-2">
	    <a href="http://www.altoqi.com.br/" target="_blank" class="strutcture-header__brand strutcture-header__brand--altoqi">AltoQi</a>
	 		<a href="#" class="right show-for-small-only trigger-menu"><i class="material-icons">&#xE5D2;</i> Menu </a>
	    <nav class="strutcture-header__nav">
	           <ul class="strutcture-header__list">
									 <?php while ( have_rows('acf_flexible_content_blocks') ) : the_row(); ?>
										 <?php if (get_sub_field('acf_block_generic__menu_question_have') == TRUE && get_sub_field('acf_block_generic__menu_name') == TRUE): ?>
											 			<li class="strutcture-header__list--item">
																<a class="strutcture-header__list--item-link" href="#<?php echo the_sub_field('acf_block_generic__id'); ?>">
																			<span class="strutcture-header__list--item-link-icon">
																						<?php $imageIcon = get_sub_field('acf_block_generic__menu_icon');
																							if( ($imageIcon) ): ?> <img src="<?php echo $imageIcon['url']; ?>" alt="<?php echo $imageIcon['alt']; ?>" /> <?php endif;
																						?>
																					</span>
																			<span class="strutcture-header__list--item-link-text">	<?php echo the_sub_field('acf_block_generic__menu_name'); ?></span>
																</a>
														</li>
										 <?php  endif; ?>
 									<?php endwhile;   ?>

									<?php if (get_field('acf_add_menu_item_question') ): ?>
										<?php  // check if the repeater field has rows of data
												if( have_rows('acf_add_menu_item_repeat') ):
													// loop through the rows of data
													while ( have_rows('acf_add_menu_item_repeat') ) : the_row(); ?>

																								 <?php if (get_sub_field('acf_add_menu_item_repeat__button_color') ): ?>
																									 <style media="screen">
																											 .strutcture-header__list--item-link__button { background-color: <?php echo the_sub_field('acf_add_menu_item_repeat__button_color'); ?>; }
																											 .strutcture-header__list--item-link__button:hover,
																											 .strutcture-header__list--item-link__button:focus { background-color: <?php echo the_sub_field('acf_add_menu_item_repeat__button_color_hover'); ?>;  }
																									 </style>
																								 <?php  endif; ?>
																										 <li class="strutcture-header__list--item">
																												 <a target="_blank" class="strutcture-header__list--item-link <?php if (get_sub_field('acf_add_menu_item_repeat__button_color') ): ?> strutcture-header__list--item-link__button <?php  endif; ?>  " href="<?php echo the_sub_field('acf_add_menu_item_repeat__link'); ?>">
																															 <span class="strutcture-header__list--item-link-text">	<?php echo the_sub_field('acf_add_menu_item_repeat__text'); ?></span>
																												 </a>
																										 </li>
														<?php endwhile; else :
											// no rows found
											endif; ?>
										 <?php  endif; ?>


						 </ul>
	    </nav>
</header>
<!-- |||||||||||||||||||||| ENDHEADER ||||||||||||||||||||||| -->
