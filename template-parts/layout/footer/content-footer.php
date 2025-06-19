<?php
$grupo_contacto       = get_field('grupo_contacto', 'options');
$items                = $grupo_contacto['items'] ?? '';

$grupo_redes_sociales = get_field('grupo_redes_sociales', 'options');
$items_redes_sociales = $grupo_redes_sociales['items'] ?? '';
$cta_correo           = $grupo_redes_sociales['cta_correo'] ?? '';
?>
<footer class="pt-5 pb-3">
    <div class="px-3">
        <div class="bg-white rounded-4">
            <div class="container">
                <div class="row d-flex flex-lg-row flex-column-reverse">
                    <div class="col-12 col-lg-7 pt-lg-5 pb-lg-3 py-4">
                        <div class="row">
                            <!-- Banderas -->
                            <?php if ($items) { ?>
                                <?php foreach ($items as $index => $item) { 
                                    $par_class = ($index % 2 == 1) ? ' col-12 col-lg-8' : 'col-12 col-lg-4 mb-4';
                                    $imagen    = $item['imagen']['ID'] ?? '';
                                    $texto     = $item['texto'] ?? '';
                                ?>
                                    <div class="<?php echo esc_attr($par_class); ?>">
                                        <?php if ($imagen) { ?>
                                            <?php echo generar_image_responsive($imagen, 'custom-size', 'rounded-circle mb-3', ''); ?>
                                        <?php } ?>
                                        <div class="d-grid gap-1">
                                            <?php if ($texto) { ?>
                                                <?php echo wp_kses_post($texto); ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 px-lg-3 px-0">
                        <div class="d-flex flex-column justify-content-center customFooterRedes px-3 pt-lg-0 pt-5 pb-lg-0 pb-3 h-100">
							<?php if ($cta_correo) { ?>
                                <div class="d-flex flex-column gap-2">
                                    <h2 class="fs-4 fw-semibold"><?php echo esc_html($cta_correo['title']); ?></h2>
									<?php if ($cta_correo && !empty($cta_correo['url'])) { ?>
										<a href="<?php echo esc_url($cta_correo['url']); ?>" 
										class="d-block fs-5" 
										target="<?php echo esc_attr($cta_correo['target'] ?? '_self'); ?>" 
										title="<?php echo esc_attr($cta_correo['title'] ?? ''); ?>">
										   <?php echo esc_html($cta_correo['url']); ?>
										</a>
									<?php } ?>
                                </div>
							<?php } ?>
                            <div>
                                <ul class="d-flex justify-content-lg-end gap-3 mt-lg-5 mt-3">
                                    <?php if ($items_redes_sociales) { ?>
                                        <?php foreach ($items_redes_sociales as $item) { 
											$cta = $item['cta'];
										?>
                                            <li class="list-style-none">
                                                <?php if ($cta && !empty($cta['url'])) { ?>
                                                    <a href="<?php echo esc_url($cta['url']); ?>" 
                                                    class="d-block" 
                                                    target="<?php echo esc_attr($cta['target'] ?? '_self'); ?>" 
                                                    title="<?php echo esc_attr($cta['title'] ?? ''); ?>">
                                                    <span class="sr-only"><?php echo esc_html($cta['title'] ?? ''); ?></span>
                                                    <img width="32" height="32" src="<?php echo esc_url($item['icono']); ?>" alt="<?php echo esc_attr($cta['title'] ?? ''); ?>" title="<?php echo esc_attr($cta['title'] ?? ''); ?>">
                                                    </a>
                                                <?php } ?>
                                            </li>
                                        <?php } ?>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>