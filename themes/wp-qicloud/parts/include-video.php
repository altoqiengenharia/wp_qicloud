<?

  if( (get_sub_field('acf_block_video__video_link')) ):
  /*  Script para remover acentos e caracteres especiais:  */
  $superString = (get_sub_field('acf_block_video__video_link'));
  $superString = ereg_replace("[^a-zA-Z0-9_]", "", strtr($superString, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC_"));
  //echo($palavra);   // imprime "acucar_uniao"

  /*
   * A função "strtr" substitui os caracteres acentuados pelos não acentuados.
   * A função "ereg_replace" utiliza uma expressão regular que remove todos os caracteres que não são letras, números e são diferentes de "_" (underscore).
   */
   endif;
?>




<div class="block-container-video">
  <a href="#" class="block-container-video__link" data-reveal-id="modal-presentation-<?php echo($superString) ?>" <?php if( (get_sub_field('acf_block_video__image_thumb')) ): ?> style="background-image: url(<?php echo get_sub_field('acf_block_video__image_thumb'); ?>) ; " <?php endif; ?>  > </a>
</div> <!-- //block-container-video -->


<!-- ||||||||||||||||||||||| MODAL video ||||||||||||||||||||||||| -->
  <div id="modal-presentation-<?php echo($superString) ?>" class="reveal-modal large" data-reveal aria-labelledby="modal-title" aria-hidden="true" role="dialog">
  	<div class="modal__midia">
          <div class="flex-video widescreen vimeo">
              <?php if( (get_sub_field('acf_block_video__video_link')) ):  ?>
                      <?php $iframeVideoOriginal = get_sub_field('acf_block_video__video_link');
                            $novoIframe = str_replace('?feature=oembed', '?rel=0', $iframeVideoOriginal);
                       echo $novoIframe;  ?>
              <?php endif; ?>
            </div> <!-- //flex-video -->
  	</div> <!-- // modal-midia -->
  	<div class="modal__conteudo">
        <?php  if( (get_sub_field('acf_block_video__video_title')) ): ?>
            <h2 id="modal-title" class="modal__conteudo--title"> <?php echo get_sub_field('acf_block_video__video_title'); ?> </h2>
        <?php endif; ?>

        <?php if( (get_sub_field('acf_block_video__video_description')) ):
           echo get_sub_field('acf_block_video__video_description');
          endif; ?>
    </div> <!-- // modal-conteudo -->

      <a class="close-reveal-modal" aria-label="Close">&#215;</a>
  </div> <!-- //modal-presentation -->
<!-- ||||||||||||||||||||||| MODAL  ||||||||||||||||||||||||| -->
