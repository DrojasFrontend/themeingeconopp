<?php
$grupo_texto_imagen = get_field('grupo_texto_imagen');
$items              = $grupo_texto_imagen['items'] ?? '';
?>

<?php if ($items) { ?>
    <?php foreach ($items as $item) { ?>
        <?php
        $imagen    = $item['imagen']['ID'] ?? '';
        $texto     = $item['texto'] ?? '';
        $fondo     = $item['fondo'] ?? '';
        $subtitulo = $item['subtitulo'] ?? '';
        $titulo    = $item['titulo'] ?? '';
        $estilo    = $item['estilo'] ?? '';

        if ($imagen) {
            $imagen = intval($imagen);
        }
        ?>
        <?php if ($estilo == 'estilo-1' || $estilo == 'estilo-2') { ?>
            <section class="customSeccionTarjetaHorizontal">
                <div class="container-fluid">
                    <div class="row d-flex <?php echo $estilo == 'estilo-1' ? 'flex-lg-row' : 'flex-lg-row-reverse'; ?> flex-column-reverse">
                        <div class="col-12 col-lg px-0">
                            <div class="bg-secondary d-flex flex-column justify-content-end pt-5 px-lg-4 px-3 pb-4 h-100">
                                <?php if ($titulo) { ?>
                                    <h2 class="fs-1-medium fw-semibold mb-3"><?php echo $titulo; ?></h2>
                                <?php } ?>
                                <?php if ($texto) { ?>
                                    <div class="fs-5"><?php echo $texto; ?></div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-12 col-lg px-0">
                            <?php if ($imagen) { ?>
                                <?php echo generar_image_responsive($imagen, 'full', 'img-fluid d-block', ''); ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php } else { ?>
            <section class="customSeccionTarjetaHorizontal2">
                <div class="container-fluid px-0">
                    <div class="bg-gray-400">
                        <div class="row gx-0 d-flex flex-lg-row flex-column-reverse">
                            <div class="col-12 col-lg-8 px-0">
                                <div class="d-flex flex-column justify-content-center p-lg-5 px-lg-4 px-3 py-5 h-100">
                                    <?php if ($subtitulo) { ?>
                                        <p class="fs-4 text-secondary-100 letter-spacing-4"><?php echo $subtitulo; ?></p>
                                    <?php } ?>
                                    <?php if ($titulo) { ?>
                                        <h2 class="fs-1-medium fw-semibold text-white letter-spacing-4 mb-2"><?php echo $titulo; ?></h2>
                                    <?php } ?>
                                    <?php if ($texto) { ?>
                                        <div class="fs-5 text-white">
                                            <?php echo $texto; ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 px-0">
                                <?php if ($imagen) { ?>
                                    <?php echo generar_image_responsive($imagen, 'full', 'img-fluid d-block h-100 object-fit-cover', ''); ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
    <?php } ?>
<?php } ?>