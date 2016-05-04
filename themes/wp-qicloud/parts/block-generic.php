<!-- ||||||||||||||||||||||||  BLOCO GENÉRICO |||||||||||||||||||||||| -->
<section id="<?php the_sub_field('acf_block_generic__id'); ?>"
	class="
		structure-main__section
		<?php if (get_sub_field('acf_block_generic__newblock_question_have') ==  "escolha-bloco-numeros") { echo "section-block-numbers"; } ?>
		<?php if (get_sub_field('acf_block_generic__newblock_question_have') ==  "escolha-bloco-galeria") { echo "section-block-gallery"; } ?>
 		<?php if (get_sub_field('acf_block_generic__newblock_question_have') ==  "escolha-bloco-rodape") { echo "section-footer"; } ?>
		<?php if (get_sub_field('acf_block_generic__newblock_question_have') ==  "escolha-bloco-video") { echo "section-video"; } ?>
		<?php the_sub_field('acf_block_generic__type_layout'); ?>
		<?php if( (get_sub_field('acf_block_generic__custom_background_image'))): ?> <?php echo 'section-background-image';?> <?php endif; ?>
		"
	<?php if( (get_sub_field('acf_block_generic__custom_background')) ): ?> style="background-size: cover !important; background: <?php echo get_sub_field('acf_block_generic__custom_background_color'); ?> url(<?php echo get_sub_field('acf_block_generic__custom_background_image'); ?>)  no-repeat center ; "<?php endif; ?>
    <?php if( (get_sub_field('acf_block_generic__custom_background_image'))): ?> data--100-top="background-position: 0 0px;" data-bottom-top="background-position: 0 -200px;" <?php endif; ?>
>




<?php if( ( get_sub_field('acf_block_generic__icon_question_have') ) ): ?>
	<span class="structure-main__section--icon"  <?php  get_sub_field('acf_block_generic__icon') ?> 	style="background-image:  url(<?php echo get_sub_field('acf_block_generic__icon'); ?>) ; "  ></span>
<?php endif;  ?>

<div class="row">
	<div class="medium-12 columns">
      <?php the_sub_field('acf_block_generic__content'); ?>
	</div> <!-- // columns-->
</div> <!-- //row -->




<?php
$block = get_sub_field('acf_block_generic__newblock_question_have');

switch ($block) {
	case 'escolha-bloco-video':
		get_template_part( 'parts/include-video' );
	  break;

  case 'escolha-bloco-recursos':
		get_template_part( 'parts/include-resourses' );
		break;

	case 'escolha-bloco-modulos':
		get_template_part( 'parts/include-modules' );
		break;

	case 'escolha-bloco-numeros':
		get_template_part( 'parts/include-numeros' );
		break;

	case 'escolha-bloco-galeria':
		get_template_part( 'parts/include-gallery' );
		break;

	case 'escolha-bloco-modulos-lista':
		get_template_part( 'parts/include-modules-list' );
		break;

		case 'escolha-bloco-lista-horizontal':
			get_template_part( 'parts/include-modules-list-horizontal' );
			break;


	case 'escolha-bloco-rodape':
		get_template_part( 'parts/include-footer' );
		break;

	default:
		//caso contrário
		break;
}

?>


	<span class="arrow-down"> <i class="material-icons">&#xE313;</i> </span>

</section>
<!-- |||||||||||||||||||||| END BLOCOS GENERICOS ||||||||||||||||||||||| -->
