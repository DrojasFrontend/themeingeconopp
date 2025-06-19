<?php
/**
 * Template Name: Página de Inicio
 * 
 * @package ThemeIngeconopp
 */

if (!defined('ABSPATH')) {
  exit;
}

get_header();
$mostrar_bloque_contenido     = get_field('mostrar_bloque_contenido');
$mostrar_banner_items         = get_field('mostrar_banner_items');
$mostrar_servicios            = get_field('mostrar_servicios');
$mostrar_soluciones           = get_field('mostrar_soluciones');
$mostrar_titulo_imagen_items  = get_field('mostrar_titulo_imagen_items');
$mostrar_testimonios          = get_field('mostrar_testimonios');
$mostrar_proyectos_destacados = get_field('mostrar_proyectos_destacados');
$mostrar_empresas             = get_field('mostrar_empresas');
$mostrar_texto_animado        = get_field('mostrar_texto_animado');

?>
  <main>

    <?php if ($mostrar_bloque_contenido) { ?>
      <!-- Bloque contenido -->
      <?php get_template_part('template-parts/componentes/bloque-contenido'); ?>
      <!-- Fin bloque contenido -->
    <?php } ?>

    <?php if ($mostrar_banner_items) { ?>
      <!-- Bloque banner items -->
      <?php get_template_part('template-parts/componentes/bloque-banner-items'); ?>
      <!-- Fin bloque banner items -->
    <?php } ?>

    <?php if ($mostrar_servicios) { ?>
      <!-- Bloque servicios -->
      <?php get_template_part('template-parts/componentes/bloque-servicios'); ?>
      <!-- Fin bloque servicios -->
    <?php } ?>

    <?php if ($mostrar_soluciones) { ?>
      <!-- Bloque soluciones -->
      <?php get_template_part('template-parts/componentes/bloque-soluciones'); ?>
      <!-- Fin bloque soluciones -->
    <?php } ?>

    <?php if ($mostrar_titulo_imagen_items) { ?>
      <!-- Bloque titulo imagen items -->
      <?php get_template_part('template-parts/componentes/bloque-titulo-imagen-items'); ?>
      <!-- Fin bloque titulo imagen items -->
    <?php } ?>

    <?php if ($mostrar_testimonios) { ?>
      <!-- Bloque testimonios -->
      <?php get_template_part('template-parts/componentes/bloque-testimonios'); ?>
      <!-- Fin bloque testimonios -->
    <?php } ?>

    <?php if ($mostrar_proyectos_destacados) { ?>
      <!-- Bloque proyectos destacados -->
      <?php get_template_part('template-parts/componentes/bloque-proyectos-destacados'); ?>
      <!-- Fin bloque proyectos destacados -->
    <?php } ?>

    <?php if ($mostrar_empresas) { ?>
      <!-- Bloque empresas -->
      <?php get_template_part('template-parts/componentes/bloque-empresas'); ?>
      <!-- Fin bloque empresas -->
    <?php } ?>

    <?php if ($mostrar_texto_animado) { ?>
      <!-- Bloque texto animado -->
      <?php get_template_part('template-parts/componentes/bloque-texto-animado'); ?>
      <!-- Fin bloque texto animado -->
    <?php } ?>
    
  </main>
<?php 
get_footer();
?>