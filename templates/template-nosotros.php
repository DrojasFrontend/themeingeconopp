<?php
/**
 * Template Name: Página de Nosotros
 * 
 * @package ThemeIngeconopp
 */

if (!defined('ABSPATH')) {
  exit;
}

get_header();
$mostrar_bloque_contenido = get_field('mostrar_bloque_contenido');
$mostrar_icono_texto      = get_field('mostrar_icono_texto');
$mostrar_texto_imagen     = get_field('mostrar_texto_imagen');
$mostrar_testimonios      = get_field('mostrar_testimonios');
$mostrar_texto_animado    = get_field('mostrar_texto_animado');
?>

<main>
  <?php if ($mostrar_bloque_contenido) { ?>
    <!-- Bloque contenido -->
    <?php get_template_part('template-parts/componentes/bloque-contenido'); ?>
    <!-- Fin bloque contenido -->
  <?php } ?>

  <?php if ($mostrar_icono_texto) { ?>
    <!-- Bloque icono texto -->
    <?php get_template_part('template-parts/componentes/bloque-icono-texto'); ?>
    <!-- Fin bloque icono texto -->
  <?php } ?>

  <?php if ($mostrar_texto_imagen) { ?>
    <!-- Bloque texto imagen -->
    <?php get_template_part('template-parts/componentes/bloque-texto-imagen'); ?>
    <!-- Fin bloque texto imagen -->
  <?php } ?>

  <?php if ($mostrar_testimonios) { ?>
    <!-- Bloque testimonios -->
    <?php get_template_part('template-parts/componentes/bloque-testimonios'); ?>
    <!-- Fin bloque testimonios -->
  <?php } ?>

  <?php if ($mostrar_texto_animado) { ?>
    <!-- Bloque texto animado -->
    <?php get_template_part('template-parts/componentes/bloque-texto-animado'); ?>
    <!-- Fin bloque texto animado -->
  <?php } ?>
  
</main>

<?php get_footer(); ?>