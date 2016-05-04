<section class="block_list_horizontal">
	<div class="row">





 <?php
 // somente para saber o numero de linhas para o bloco números
  if( have_rows('acf_block_list_horizontal') ):
	   $counterListHorizontal = 0;
	    while ( have_rows('acf_block_list_horizontal') ) : the_row();
	    	$counterListHorizontal++;
	    endwhile;
	else :
endif;  ?>





<ul class="block_list_horizontal-list medium-block-grid-<?php echo $counterListHorizontal;?> small-block-grid-1">

<?php if ( get_sub_field('acf_block_list_horizontal_color_hover') ): ?>
<style>
	.block_list_horizontal--list-item__inner:hover {
 			border-color: <?php the_sub_field('acf_block_list_horizontal_color_hover'); ?>;
	}
</style>
<?php else: ?>
<style>
	.block_list_horizontal--list-item__inner:hover {
 			border-color: #43ac75;
	}
</style>
<?php endif; ?>


 <?php // check if the repeater field has rows of data
	if( have_rows('acf_block_list_horizontal') ):

 // loop through the rows of data
	    while ( have_rows('acf_block_list_horizontal') ) : the_row(); ?>

         <li class="block_list_horizontal--list-item ">
					 <div class="block_list_horizontal--list-item__inner">
								 	<span class="block_list_horizontal-list__container-image"> <img class="block_list_horizontal-list__image" src="<?php the_sub_field('acf_block_list_horizontal_icon'); ?>" alt="" />  </span>
								 	<span class="block_list_horizontal-list__title"> <?php the_sub_field('acf_block_list_horizontal_title'); ?>   </span>
								 	<span class="block_list_horizontal-list__subtitle"> <?php the_sub_field('acf_block_list_horizontal_subtitle');?> </span>
					 </div> <!-- //block_list_horizontal-list-item -->
         </li>
  <?php endwhile;

 	else :
	    // no rows found
	endif;
?>
   </ul>

	</div> <!-- ///row -->



</section>
