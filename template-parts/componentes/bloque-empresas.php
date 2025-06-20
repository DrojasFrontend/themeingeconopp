<?php
// Obtener parámetros pasados desde el archivo principal
$page_id_for_acf     = get_query_var('page_id_for_acf');
$custom_class        = get_query_var('custom_class') ?: 'pt-lg-7 pt-5';
$acf_group_name      = get_query_var('acf_group_name') ?: 'grupo_empresas'; // Fallback por defecto

// Obtener el grupo ACF usando el nombre especificado
$grupo_empresas      = $page_id_for_acf ? get_field($acf_group_name, $page_id_for_acf) : get_field($acf_group_name);
$titulo              = $grupo_empresas['titulo'] ?? '';
$items               = $grupo_empresas['items'] ?? '';

?>
<section class="customSeccionMarcas <?php echo esc_attr($custom_class); ?>">
	<div class="container">
		<div class="text-center">
			<?php if ($titulo) { ?>
				<h2 class="fs-3 mb-lg-5 mb-4"><?php echo $titulo; ?></h2>
			<?php } ?>
		</div>
		<div class="row">
			<div class="swiper marcaSwiper">
				<div class="swiper-wrapper">
					<?php if ($items) { ?>
						<?php foreach ($items as $item) {
							$imagen = $item['imagen']['ID'] ?? '';
						?>
							<div class="swiper-slide">
								<?php 
									if ($imagen) {
										echo generar_image_responsive($imagen, 'custom-size', 'img-fluid', '');
									}
								?>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>