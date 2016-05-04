<?php
/**
 * Template Name: Hotsites #1
 *
 */
?>

<?php get_header(); ?>



<?php get_template_part( 'parts/include-header' ); ?>


<?php


if ( have_posts() ) : while ( have_posts() ) : the_post();

										// check if the flexible content field has rows of data
										if( have_rows('acf_flexible_content_blocks') ):

										     // loop through the rows of data
										    while ( have_rows('acf_flexible_content_blocks') ) : the_row();
										            if( get_row_layout() == 'bloco_generico' ): 	get_template_part( 'parts/block-generic' );
										      	       //elseif(   );
													        // elseif( get_row_layout() == 'bloco_footer' ): 	get_template_part( 'parts/block-footer' );
										              // elseif( get_row_layout() == 'bloco_recursos' ): 	get_template_part( 'parts/block-resourses' );
										        endif;


										    endwhile;
										else :

										    // no layouts found

										endif;



  endwhile; else :
endif;


?>



<a href="#body" class="scrolltop"> &#9650;</a>

<?php edit_post_link('<i class="material-icons">&#xE3C9;</i> <span class="post-edit-link--text"> Editar página</span>  ', '<span class="fab-button__edit-page card z-1">', '</span>'); ?>


<!-- |||||||||||||||||||||| ENDMODAIS ||||||||||||||||||||||| -->



<?php get_footer(); ?>
