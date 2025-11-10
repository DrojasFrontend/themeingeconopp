<section class="headerMobile position-fixed top-0 left-0 w-100 h-100 bg-white d-flex flex-column" data-menu-mobile>
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
    </div>
    
    <!-- Contenedor con scroll para el menú -->
    <div class="menu-scroll-container flex-grow-1 overflow-auto px-4" style="padding-bottom: 180px;">
        <?php
            // Mostrar el menú principal de WordPress
            wp_nav_menu(array(
                'theme_location' => 'menu-principal',
                'menu_class' => 'd-flex flex-column align-items-center pt-3 gap-3 text-center',
                'container' => false,
                'fallback_cb' => false,
                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                'link_before' => '',
                'link_after' => '',
                'walker' => new class extends Walker_Nav_Menu {
                    function start_lvl(&$output, $depth = 0, $args = null) {
                        $output .= '<div class="submenu-wrapper-mobile p-3 rounded-3 mt-2">';
                        $output .= '<ul class="submenu-mobile d-flex flex-column gap-2">';
                    }
                    
                    function end_lvl(&$output, $depth = 0, $args = null) {
                        $output .= '</ul>';
                        $output .= '<div class="submenu-tarjeta-mobile mt-3">';
                        $output .= '<div class="bg-gray-100 p-3 rounded-3">';
                        $output .= '<div class="text-center">';
                        $output .= '<h3 class="fs-5 fw-semibold mb-2 text-white-100">Descubre nuevas formas de construir</h3>';
                        $output .= '<p class="text-secondary-100 mb-2">Soluciones de vivienda modular con Easy Housing System</p>';
                        $output .= '<a href="/easyhousingsystem" class="text-white-100"><span class="text-white-100 fw-normal d-flex align-items-center justify-content-center gap-2">Conoce más ';
                        ob_start();
                        get_template_part('template-parts/componentes/icono-siguiente');
                        $output .= ob_get_clean();
                        $output .= '</span></a>';
                        $output .= '<div class="mt-3">';
                        $output .= '<img class="w-100 rounded-3" src="' . get_template_directory_uri() . '/images/img-submenu-easyhousing.webp" alt="Easy Housing System">';
                        $output .= '</div>';
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
                            $classes[] = 'has-submenu-mobile';
                        }
                        
                        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
                        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
                        
                        $output .= '<li' . $class_names .'>';
                        
                        $attributes = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
                        $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target     ) .'"' : '';
                        $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn        ) .'"' : '';
                        $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url        ) .'"' : '';
                        
                        // Clases según el nivel
                        $link_class = $depth > 0 ? 'text-secondary-100 fw-regular d-flex justify-content-between align-items-center py-1' : 'd-block text-secondary-100 fs-4 py-2';
                        
                        $item_output = $args->before ?? '';
                        $item_output .= '<a class="' . $link_class . '"' . $attributes .'>';
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
                echo '<ul class="d-flex flex-column align-items-center pt-3 gap-3">';
                echo '<li class="list-style-none"><a href="/" class="text-secondary">Inicio</a></li>';
                echo '<li class="list-style-none"><a href="/servicios/" class="text-secondary-100">Servicios</a></li>';
                echo '<li class="list-style-none"><a href="/proyectos/" class="text-secondary-100">Proyectos</a></li>';
                echo '<li class="list-style-none"><a href="/nosotros/" class="text-secondary-100">Nuestra empresa</a></li>';
                echo '</ul>';
            }
        ?>
    </div>
    <!-- Fin del contenedor con scroll -->
    
    <div class="position-fixed bottom-0 left-0 w-100 p-4 bg-white">
        <a href="/contactanos/" class="btn btn-primary w-100 justify-content-center">Contáctanos</a>
        <div class="mt-4">
           <?php get_template_part('template-parts/componentes/bloque-redes-sociales', null, array('clase' => 'justify-content-center')); ?>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Seleccionar todos los items del menú mobile que tienen submenú
    const menuItemsWithSubmenu = document.querySelectorAll('.has-submenu-mobile');
    
    menuItemsWithSubmenu.forEach(function(menuItem) {
        const link = menuItem.querySelector('a');
        const submenu = menuItem.querySelector('.submenu-wrapper-mobile');
        
        if (link && submenu) {
            // Ocultar inicialmente
            submenu.style.display = 'none';
            submenu.style.overflow = 'hidden';
            
            // Al hacer clic en el enlace
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                const isOpen = submenu.classList.contains('active');
                
                // Cerrar otros submenús abiertos
                document.querySelectorAll('.submenu-wrapper-mobile.active').forEach(function(openSubmenu) {
                    if (openSubmenu !== submenu) {
                        slideUp(openSubmenu);
                    }
                });
                
                // Toggle el submenú actual
                if (isOpen) {
                    slideUp(submenu);
                } else {
                    slideDown(submenu);
                }
            });
        }
    });
    
    // Función para slide down
    function slideDown(element) {
        element.style.display = 'block';
        element.classList.add('active');
        const height = element.scrollHeight;
        element.style.height = '0px';
        element.style.transition = 'height 0.3s ease-out';
        
        setTimeout(function() {
            element.style.height = height + 'px';
        }, 10);
        
        setTimeout(function() {
            element.style.height = 'auto';
        }, 310);
    }
    
    // Función para slide up
    function slideUp(element) {
        const height = element.scrollHeight;
        element.style.height = height + 'px';
        element.style.transition = 'height 0.3s ease-out';
        
        setTimeout(function() {
            element.style.height = '0px';
        }, 10);
        
        setTimeout(function() {
            element.style.display = 'none';
            element.classList.remove('active');
            element.style.height = '';
        }, 310);
    }
});
</script>