<?php
$grupo_testimonios = get_field('grupo_testimonios');
$titulo            = $grupo_testimonios['titulo'] ?? '';
$texto             = $grupo_testimonios['texto'] ?? '';
$items             = $grupo_testimonios['items'] ?? '';

if ($titulo) {
	$titulo = esc_html($titulo);
}
if ($texto) {
	$texto = esc_html($texto);
}
?>

<section class="customSeccionTestimonios pt-lg-7 pt-4"> 
	<div class="px-3">
		<div class="bg-white pt-5 pb-lg-6 pb-5 rounded-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-5">
						<div class="col-12 col-lg-10">
							<?php if ($titulo) { ?>
								<h2 class="fs-2 fw-semibold mb-2"><?php echo $titulo; ?></h2>
							<?php } ?>
							<?php if ($texto) { ?>
								<p class="fs-5 fw-light mb-3"><?php echo $texto; ?></p>
							<?php } ?>
							<div class="col-12 col-lg-5 p-0">
								<div class="customSwiperPagination position-relative">
									<div class="swiper-button-prev swiper-prev-testimonio"></div>
									<div class="swiper-button-next swiper-next-testimonio"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-7">
						<div class="swiper testimoniosSwiper">
							<div class="swiper-wrapper">
								<?php if ($items) { ?>
									<?php foreach ($items as $item) { 
										$avatar      = $item['avatar']['ID'] ?? '';
										$nombre_item = $item['nombre'] ?? '';
										$texto_item  = $item['texto'] ?? '';
										$rol_item    = $item['rol'] ?? '';

										if ($avatar) {
											$avatar = intval($avatar);
										}
										if ($nombre_item) {
											$nombre_item = esc_html($nombre_item);
										}
										if ($rol_item) {
											$rol_item = esc_html($rol_item);
										}
									?>
									<div class="swiper-slide">
										<div class="col-12 col-lg-11 ps-lg-3">
											
											<div class="d-flex flex-lg-column flex-column-reverse">
												<div class="position-relative d-flex flex-column pt-4">
												  <img class="position-absolute top-0 comillas" width="72" height="49" src="<?php echo THEME_IMG; ?>/iconos/icono-comilla.png" alt="" title="">
													<?php if ($texto_item) { ?>
														<div class="fs-5"><?php echo $texto_item; ?></div>
													<?php } ?>
												</div>
												<div class="d-lg-flex align-items-center mt-4">
													<div class="customSeccionTestimonios__img">
														<?php if ($avatar) { ?>
															<?php echo generar_image_responsive($avatar, 'custom-size', 'rounded-circle', ''); ?>
														<?php } ?>
													</div>
													<div class="ps-lg-3">
														<?php if ($nombre_item) { ?>
															<p class="fs-4 text-gray-300 fw-semibold"><?php echo $nombre_item; ?></p>
														<?php } ?>
														<?php if ($rol_item) { ?>
															<p class="fs-5 text-secondary-100"><?php echo $rol_item; ?></p>
														<?php } ?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>