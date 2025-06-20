<?php
$grupo_soluciones = get_field('grupo_soluciones');
$titulo           = $grupo_soluciones['titulo'] ?? '';
$items            = $grupo_soluciones['items'] ?? '';
?>

<section class="customSeccionSoluciones pt-lg-7 pt-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
				<?php if ($titulo) { ?>
					<h2 class="fs-3 mb-4"><?php echo $titulo; ?></h2>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="swiper solucionesSwiper">
		<div class="swiper-wrapper">
			<?php if ($items) { ?>
				<?php foreach ($items as $key => $item) { 
					$imagen_item = $item['imagen']['ID'] ?? '';
					$titulo_item = $item['titulo'] ?? '';
					
					if ($imagen_item) {
						$imagen_item = intval($imagen_item);
					}
				?>
					<div class="swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="<?php echo $key * 0.2; ?>s">
						<div class="position-relative customHoverZoom overflow-hidden">
							<?php if ($imagen_item) { ?>
								<?php echo generar_image_responsive($imagen_item, 'custom-size', 'd-block img-fluid', ''); ?>
							<?php } ?>
							<?php if ($titulo_item) { ?>
								<div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end justify-content-start p-4">
									<h3 class="fs-5 text-white"><?php echo $titulo_item; ?></h3>
								</div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
	</div>
</section>