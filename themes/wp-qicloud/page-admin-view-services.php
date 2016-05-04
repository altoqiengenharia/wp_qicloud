<?php
/**
 * Template Name: Visualizador serviços
 *
 */
?>

<?php  get_header(); ?>


<style media="screen">
  ._strutcture-header{display: none}
form#loginform {
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.37);
    width: 250px;
    margin: 0 auto;
}
input#wp-submit {
    background-color: #02864F;
    padding: 10px;
    width: 100%;
    margin: 0;
    cursor: pointer;
}
input#wp-submit:hover {
    color: #fff;
    opacity: 0.9;
}
p.login-submit {
    margin: 0;
}

.structure-main {
    padding-top: 100px;
    padding-bottom: 100px;
    display:inline-block;
    width:100%;
 }


 </style>




<?php if ( is_user_logged_in() ) {   ?>


<!-- |||||||||||||||||||||||| HEADER |||||||||||||||||||||||| -->
<header class="strutcture-header z-2">
	    <a href="#" target="_blank" class="strutcture-header__brand strutcture-header__brand--altoqi">AltoQi</a>
	 		<a href="#" class="right show-for-small-only trigger-menu"><i class="material-icons"></i> Menu </a>
	    <nav class="strutcture-header__nav">
	           <ul class="strutcture-header__list">

<li class="strutcture-header__list--item">
<a class="strutcture-header__list--item-link" >
<span class="strutcture-header__list--item-link-text"> Olá <?php echo $current_user->user_firstname; ?></span>
 </a>
</li>

<li class="strutcture-header__list--item">
<a class="strutcture-header__list--item-link  strutcture-header__list--item-link__button" href="<?php echo wp_logout_url( get_permalink() ); ?>">
<span class="strutcture-header__list--item-link-text"> Logout </span>
</a>
</li>


	   </ul>
	    </nav>
</header>
<!-- |||||||||||||||||||||| ENDHEADER ||||||||||||||||||||||| -->








 



<div class="_row">
  <div class="small-12 columns">
    <table id="datatables-produtos"  class="display nowrap" >
          <thead>
             <tr>
                  <th width="100">ID</th>
                  <th width="200">Hotsite</th>
                  <th>Nome</th>
                  <th>Empresa</th>
                  <th>Email</th>
                  <th width="150">Telefone 1</th>
                  <th width="150">Telefone 2</th>
                  <th width="">Data</th>
                  <th width="150">Quando?</th>

              </tr>
          </thead>
          <tbody>



            <?php
                  $newsArgs = array( 'post_type' => 'flamingo_inbound', 'posts_per_page' => -1);
                  $flamingoInboundLoop = new WP_Query( $newsArgs );
                  while ( $flamingoInboundLoop->have_posts() ) : $flamingoInboundLoop->the_post(); ?>

                  <?php if ($post->post_title == "QiCloud"  ): ?>

                  <?php
                    $post = get_post( $post );
                    $var = explode("\n",$post->post_content)
                  ?>




       <?php /* ?> <p> cadastrado a <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' atrás'; ?> </p> <?php */ ?>
       <tr>
           <td>  <?php echo $post->ID; ?>         </td>
           <td>  <?php echo $post->post_title ?>  </td>
           <td>  <?php echo $var[0]; ?>           </td>
           <td>  <?php echo $var[1]; ?>           </td>
           <td>  <?php echo $var[2]; ?>           </td>
           <td>  <?php echo $var[3]; ?>           </td>
           <td>  <?php echo $var[4]; ?>           </td>
           <td>  <?php echo $post->post_date; ?>  </td>
           <td>  <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' atrás'; ?>  </td>

       </tr>

<?php endif;  // $post->post_title != "QiCloud"  ?>


<?php endwhile; ?>

</tbody>
</table>
</div> <!-- // columns -->
</div> <!-- // row -->






<?php //end se  estiver logado  ?>
 <?php } else {    wp_login_form();     } ?>










<link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" charset="utf-8">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.1.2/css/buttons.dataTables.min.css" charset="utf-8">

<script type="text/javascript" src=" //code.jquery.com/jquery-1.12.0.min.js"> </script>
<script type="text/javascript" src=" https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"> </script>
<script type="text/javascript" src=" https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"> </script>
<script type="text/javascript" src=" //cdn.datatables.net/buttons/1.1.2/js/buttons.flash.min.js"> </script>
<script type="text/javascript" src=" //cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"> </script>
<script type="text/javascript" src=" //cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"> </script>
<script type="text/javascript" src=" //cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"> </script>
<script type="text/javascript" src=" //cdn.datatables.net/buttons/1.1.2/js/buttons.html5.min.js"> </script>
<script type="text/javascript" src=" //cdn.datatables.net/buttons/1.1.2/js/buttons.print.min.js"> </script>


<script type="text/javascript">


  $(document).ready(function() {
    $('#datatables-produtos').DataTable( {
       responsive: true,
        dom: 'Bfrtip',
        buttons: [
            //'copy',
            'csv',
            'excel',
            //'pdf',
            //'print'
        ],
 	"order": [[ 7, 'desc' ]],
	"pageLength": 50
    } );
} );

 </script>


<?php get_footer(); ?>
