<?php
/**
 * Template Name: Página de Estilos
 * 
 * @package ThemeIngeconopp
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

?>

<section>
  <?php 
    get_template_part('template-parts/componentes/componente', 'titulo', array(
      'titulo' => '¿Qué deseas hacer hoy?', 
      'alinear' => 'text-lg-center'))
    ?>
</section>


  
</div>
<?php 
get_footer();
?>