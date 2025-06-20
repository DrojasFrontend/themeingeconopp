<?php
// Obtener parámetros pasados desde el archivo principal
$page_id_for_acf     = get_query_var('page_id_for_acf');
$custom_class        = get_query_var('custom_class') ?: 'pt-lg-7 pt-4';
$acf_group_name      = get_query_var('acf_group_name') ?: 'grupo_texto_animado'; // Fallback por defecto

// Obtener el grupo ACF usando el nombre especificado
$grupo_texto_animado = $page_id_for_acf ? get_field($acf_group_name, $page_id_for_acf) : get_field($acf_group_name);
$imagen              = $grupo_texto_animado['imagen']['ID'] ?? '';
$items               = $grupo_texto_animado['items'] ?? '';

if ($imagen) {
	$imagen = intval($imagen);
}

?>
<section class="customSeccionMarquee <?php echo esc_attr($custom_class); ?>">
    <?php if ($imagen) { ?>
		<div class="container">
			<div class="row">
				<div class="col-12 text-center mb-4">
					<?php echo generar_image_responsive($imagen, 'custom-size', '', ''); ?>
				</div>
			</div>
		</div>
	<?php } ?>
	<div class="swiper marqueeSwiper">
		<div class="swiper-wrapper">
			<?php if ($items) { ?>
				<?php foreach ($items as $item) { 
					$texto = $item['texto'] ?? '';
				?>
					<div class="swiper-slide">
						<div class="d-flex">
							<?php if ($texto) { ?>
								<div class="d-none d-lg-block fs-1"><?php echo $texto; ?></div>
								<div class="d-lg-none fs-4"><?php echo $texto; ?></div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</section>