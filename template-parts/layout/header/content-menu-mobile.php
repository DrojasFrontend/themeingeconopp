<section class="headerMobile position-fixed top-0 left-0 w-100 h-100 bg-white" data-menu-mobile>
    <div class="d-flex justify-content-center py-3 bg-gray-100 text-white-100">
        <?php get_template_part('template-parts/componentes/bloque-traductor'); ?>
    </div>
    <div class="p-4">
        <div class="d-flex justify-content-between align-items-center">
            <?php get_template_part('template-parts/layout/header/content-logo'); ?>
            <button type="button" class="border-0 bg-transparent p-0 text-primary" data-cerrar-menu>
                <?php get_template_part('template-parts/componentes/icono-cerrar'); ?>
            </button>
        </div>
        <?php
            // Mostrar el menú principal de WordPress
            wp_nav_menu(array(
                'theme_location' => 'menu-principal',
                'menu_class' => 'd-lg-flex align-items-center justify-content-center h-100 pt-5 gap-5 text-center',
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
                        $item_output .= '<a class="d-block text-secondary-100 fs-4 py-2"' . $attributes .'>';
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
    </div>
    <div class="position-fixed bottom-0 left-0 w-100 p-4">
        <a href="/contactanos/" class="btn btn-primary w-100 justify-content-center">Contáctanos</a>
        <div class="mt-4">
           <?php get_template_part('template-parts/componentes/bloque-redes-sociales', null, array('clase' => 'justify-content-center')); ?>
        </div>
    </div>
</section>