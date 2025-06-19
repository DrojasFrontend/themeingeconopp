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
            $output .= '<ul class="dropdown-menu">';
        }
        
        function end_lvl(&$output, $depth = 0, $args = null) {
            $output .= '</ul>';
        }
        
        function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
            $classes = empty($item->classes) ? array() : (array) $item->classes;
            $classes[] = 'list-style-none';
            
            $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
            $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
            
            $output .= '<li' . $class_names .'>';
            
            $attributes = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
            $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target     ) .'"' : '';
            $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn        ) .'"' : '';
            $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url        ) .'"' : '';
            
            $item_output = $args->before ?? '';
            $item_output .= '<a class="text-secondary-100"' . $attributes .'>';
            $item_output .= ($args->link_before ?? '') . apply_filters('the_title', $item->title, $item->ID) . ($args->link_after ?? '');
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