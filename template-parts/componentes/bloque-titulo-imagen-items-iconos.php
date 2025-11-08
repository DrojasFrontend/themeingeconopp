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
			<div class="col-12 col-lg-7 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
				<?php if ($titulo) { ?>
					<h2 class="fs-2 mb-lg-4 mb-4"><?php echo $titulo; ?></h2>
				<?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
				<?php if ($imagen) { ?>
					<?php echo generar_image_responsive($imagen, 'custom-size', 'img-fluid mb-lg-0 mb-4', ''); ?>
				<?php } ?>
			</div>
			<div class="col-12 col-lg-7 d-flex flex-column justify-content-center">
				<?php if ($items) { ?>
					<ul>
						<?php foreach ($items as $key => $item) { 
							$titulo_item = $item['titulo'] ?? '';
							$icono_item  = $item['icono'] ?? '';

							if ($titulo_item) {
								$titulo_item = esc_html($titulo_item);
							}
						?>
							<li class="position-relative pe-6 mb-3 pe-5 pb-3 list-style-none wow fadeInUp" data-wow-duration="1s" data-wow-delay="<?php echo $key * 0.2; ?>s">
								<?php if ($titulo_item) { ?>
									<h3 class="fs-5 fw-regular d-flex gap-2">
										<?php if ($icono_item) { ?>
											<img class="d-block" width="24" height="24" src="<?php echo $icono_item; ?>" alt="<?php echo $titulo_item; ?>">
										<?php } ?>
										<?php echo $titulo_item; ?>
									</h3>
								<?php } ?>
							</li>
						<?php } ?>
					</ul>
				<?php } ?>
			</div>
		</div>
	</div>
</section>