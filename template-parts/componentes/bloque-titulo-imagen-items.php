<?php
$grupo_titulo_imagen_items = get_field('grupo_titulo_imagen_items');
$titulo                    = $grupo_titulo_imagen_items['titulo'] ?? '';
$imagen                    = $grupo_titulo_imagen_items['imagen']['ID'] ?? '';
$items                     = $grupo_titulo_imagen_items['items'] ?? '';

if ($imagen) {
	$imagen = intval($imagen);
}
?>
<section class="customSeccionImagenItems pt-lg-7 pt-5">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-5">
				<?php if ($titulo) { ?>
					<h2 class="fs-2 mb-lg-0 mb-4"><?php echo $titulo; ?></h2>
				<?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-5">
				<?php if ($imagen) { ?>
					<?php echo generar_image_responsive($imagen, 'custom-size', 'img-fluid mb-lg-0 mb-4', ''); ?>
				<?php } ?>
			</div>
			<div class="col-12 col-lg-7">
				<?php if ($items) { ?>
					<ul>
						<?php foreach ($items as $item) { 
							$titulo_item = $item['titulo'] ?? '';
							$texto_item  = $item['texto'] ?? '';
							$cta_item    = $item['cta'] ?? '';
							
							if ($titulo_item) {
								$titulo_item = esc_html($titulo_item);
							}
							if ($texto_item) {
								$texto_item = esc_html($texto_item);
							}
						?>
							<li class="position-relative pe-6 clickeable mb-4 pe-5 list-style-none">
								<?php if ($titulo_item) { ?>
									<h3 class="fs-4 fw-regular mb-2"><?php echo $titulo_item; ?></h3>
								<?php } ?>
								<?php if ($texto_item) { ?>
									<div class="parrafo"><?php echo $texto_item; ?></div>
								<?php } ?>
								<?php if ($cta_item && !empty($cta_item['url'])) { ?>
									<a href="<?php echo esc_url($cta_item['url']); ?>" 
									   class="position-absolute top-0 end-0" 
									   target="<?php echo esc_attr($cta_item['target'] ?? '_self'); ?>" 
									   title="<?php echo esc_attr($cta_item['title'] ?? ''); ?>">
										<?php get_template_part('template-parts/componentes/icono-siguiente'); ?>
									</a>
								<?php } ?>
							</li>
						<?php } ?>
					</ul>
				<?php } ?>
			</div>
		</div>
	</div>
</section>