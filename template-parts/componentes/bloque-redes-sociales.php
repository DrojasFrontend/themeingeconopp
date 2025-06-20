<?php 
$grupo_redes_sociales = get_field('grupo_redes_sociales', 'options');
$items_redes_sociales = $grupo_redes_sociales['items'] ?? '';
$clase                = $args['clase'] ?? 'justify-content-lg-end';
?>
<ul class="d-flex <?php echo $clase; ?> gap-3 mt-lg-5 mt-3">
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