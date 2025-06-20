<?php 
    global $TRP_LANGUAGE;
    $trp = TRP_Translate_Press::get_trp_instance();
    $url_converter = $trp->get_component('url_converter');

    $idiomas = array(
        'es_CO' => 'Español',
        'en_US' => 'Ingles'
    );
?>

<div class="d-inline-block">
    <div class="w-auto d-flex flex-row-reverse align-items-center gap-lg-2 gap-1 bg-gray-300 py-1 px-2 rounded-5">
        <?php foreach ($idiomas as $codigo => $nombre): ?>
            <?php if ($codigo === $TRP_LANGUAGE): ?>
                <span class="parrafo-small bg-gray-200 px-lg-3 px-2 py-1 rounded-5 language-active"><?php echo $nombre; ?></span>
            <?php else: ?>
                <a class="parrafo-small px-3 py-1" href="<?php echo $url_converter->get_url_for_language($codigo); ?>" class="language-inactive">
                    <?php echo $nombre; ?>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>