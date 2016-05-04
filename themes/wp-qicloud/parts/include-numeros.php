<section class="block-numbers">
	<div class="row">

 

 

 <?php
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
	if( have_rows('acf_block_numbers') ):
	 
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
		
	</div> <!-- ///row -->



</section>