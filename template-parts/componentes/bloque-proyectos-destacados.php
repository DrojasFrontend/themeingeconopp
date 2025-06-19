<?php
$grupo_proyectos_destacados = get_field('grupo_proyectos_destacados');
$titulo                     = $grupo_proyectos_destacados['titulo'] ?? '';
$texto                      = $grupo_proyectos_destacados['texto'] ?? '';
$cta                        = $grupo_proyectos_destacados['cta'] ?? '';
$items                      = $grupo_proyectos_destacados['proyectos'] ?? '';

?>
<section class="customSeccionProyectos pt-lg-7 pt-4">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
				<?php if ($titulo) { ?>
					<h2 class="fs-2"><?php echo $titulo; ?></h2>
				<?php } ?>
			</div>
			<div class="col-12 col-lg-6">
				<?php if ($cta) { ?>
					<div class="d-flex justify-content-lg-end">
						<?php if ($cta && !empty($cta['url'])) { ?>
							<a href="<?php echo esc_url($cta['url']); ?>" 
								class="btn btn-blaco px-0" 
								target="<?php echo esc_attr($cta['target'] ?? '_self'); ?>" 
								title="<?php echo esc_attr($cta['title'] ?? ''); ?>">
								<?php echo esc_html($cta['title'] ?? ''); ?>
								<?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
							</a>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
			<div class="col-12"><span class="linea-horizontal bg-gray-200 mt-3"></span></div>
			<div class="col-12 mt-3">
				<?php if ($texto) { ?>
					<div class="parrafo">
						<?php echo $texto; ?>
				  </div>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="col-12 pe-0 pt-lg-5 pt-3 ps-3">
		<div class="swiper proyectosSwiper">
			<div class="swiper-wrapper">
				<?php if ($items) { ?>
					<?php foreach ($items as $item) { ?>
						<div class="swiper-slide">
							<?php 
								$imagen_proyecto = get_the_post_thumbnail_url($item->ID, 'large');
								if (!$imagen_proyecto) {
									$imagen_proyecto = THEME_IMG . '/proyecto-default.webp';
								}
							?>
							<img class="img-fluid mb-3" src="<?php echo esc_url($imagen_proyecto); ?>" alt="<?php echo esc_attr($item->post_title); ?>" title="<?php echo esc_attr($item->post_title); ?>">
							<h3 class="fs-4 fw-regular"><?php echo esc_html($item->post_title); ?></h3>
							
							<?php 
								$taxonomias = wp_get_post_terms($item->ID, 'proyectos', ['fields' => 'names']);
								$tipo_proyecto = 'Proyectos';
							
								if (!is_wp_error($taxonomias) && !empty($taxonomias)) {
									$tipo_proyecto = $taxonomias[0];
								}
							?>
						
							<a href="<?php echo esc_url(get_permalink($item->ID)); ?>" class="btn btn-blaco p-0 justify-content-between" title="<?php echo esc_attr($item->post_title); ?>">
								<?php echo esc_html($tipo_proyecto); ?>
								<?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
							</a>
						</div>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
		<div class="customSwiperPagination d-flex d-lg-none justify-content-center swiper-pagination-proyectos mt-4"></div>
	</div>
</section>