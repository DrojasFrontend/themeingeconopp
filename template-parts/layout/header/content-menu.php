<?php
// Mostrar el menú principal de WordPress
wp_nav_menu(array(
    'theme_location' => 'menu-principal',
    'menu_class' => 'd-none d-lg-flex align-items-center justify-content-center h-100 gap-5',
    'container' => false,
    'fallback_cb' => false,
    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
    'link_before' => '',
    'link_after' => '',
    'walker' => new class extends Walker_Nav_Menu {
        function start_lvl(&$output, $depth = 0, $args = null) {
            $output .= '<div class="submenu-wrapper position-absolute bg-white-100 p-3 rounded-3">';
            $output .= '<div class="container">';
            $output .= '<div class="row">';
            $output .= '<ul class="submenu col-12 col-lg-6 d-flex flex-column justify-content-center gap-2">';
        }
        
        function end_lvl(&$output, $depth = 0, $args = null) {
            $output .= '</ul>';
            $output .= '<div class="submenu-tarjeta col-12 col-lg-6">';
            $output .= '<div class="bg-gray-100 p-2 ps-4 rounded-3">';
            $output .= '<div class="row">';
            $output .= '<div class="col-12 col-lg-6 d-flex flex-column justify-content-center">';
            $output .= '<h3 class="fs-5 fw-semibold mb-2 text-white-100">Descubre nuevas formas de construir</h3>';
            $output .= '<p class="text-secondary-100 mb-2">Soluciones de vivienda modular con Easy Housing System</p>';
            $output .= '<a href="/easyhousingsystem" class="text-white-100"><span class="text-white-100 fw-normal d-flex align-items-center gap-2">Conoce más ';
            ob_start();
            get_template_part('template-parts/componentes/icono-siguiente');
            $output .= ob_get_clean();
            $output .= '</span></a>';
            $output .= '</div>';
            $output .= '<div class="col-12 col-lg-6">';
            $output .= '<img class="w-100" src="' . get_template_directory_uri() . '/images/img-submenu-easyhousing.webp" alt="Easy Housing System">';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</div>';
        }
        
        function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
            $classes = empty($item->classes) ? array() : (array) $item->classes;
            $classes[] = 'list-style-none';
            
            // Detectar si tiene hijos
            if (in_array('menu-item-has-children', $item->classes)) {
                $classes[] = 'has-submenu';
            }
            
            $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
            $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
            
            $output .= '<li' . $class_names .'>';
            
            $attributes = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
            $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target     ) .'"' : '';
            $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn        ) .'"' : '';
            $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url        ) .'"' : '';
            
            $item_output = $args->before ?? '';
            $item_output .= '<a class="text-secondary-100 fw-regular d-flex justify-content-between align-items-center py-1"' . $attributes .'>';
            $item_output .= ($args->link_before ?? '') . apply_filters('the_title', $item->title, $item->ID) . ($args->link_after ?? '');
            
            // Agregar icono solo a items de submenú (depth > 0)
            if ($depth > 0) {
                ob_start();
                get_template_part('template-parts/componentes/icono-siguiente');
                $item_output .= ob_get_clean();
            }
            
            $item_output .= '</a>';
            $item_output .= $args->after ?? '';
            
            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
        }
        
        function end_el(&$output, $item, $depth = 0, $args = null) {
            $output .= '</li>';
        }
    }
));

// Menú de respaldo si no hay menú asignado
if (!has_nav_menu('menu-principal')) {
    echo '<ul class="d-none d-lg-flex align-items-center h-100 gap-5">';
    echo '<li class="list-style-none"><a href="/" class="text-secondary">Inicio</a></li>';
    echo '<li class="list-style-none"><a href="/servicios/" class="text-secondary-100">Servicios</a></li>';
    echo '<li class="list-style-none"><a href="/proyectos/" class="text-secondary-100">Proyectos</a></li>';
    echo '<li class="list-style-none"><a href="/nosotros/" class="text-secondary-100">Nuestra empresa</a></li>';
    echo '</ul>';
}
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Seleccionar todos los items del menú que tienen submenú
    const menuItemsWithSubmenu = document.querySelectorAll('.has-submenu');
    
    menuItemsWithSubmenu.forEach(function(menuItem) {
        const link = menuItem.querySelector('a');
        const submenu = menuItem.querySelector('.submenu-wrapper');
        
        if (link && submenu) {
            // Al hacer clic en el enlace
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Cerrar otros submenús abiertos
                document.querySelectorAll('.submenu-wrapper.active').forEach(function(openSubmenu) {
                    if (openSubmenu !== submenu) {
                        openSubmenu.classList.remove('active');
                    }
                });
                
                // Toggle el submenú actual
                submenu.classList.toggle('active');
            });
        }
    });
    
    // Cerrar submenú al hacer clic fuera
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.has-submenu')) {
            document.querySelectorAll('.submenu-wrapper.active').forEach(function(submenu) {
                submenu.classList.remove('active');
            });
        }
    });
});
</script>