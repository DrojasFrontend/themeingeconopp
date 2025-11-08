<?php
$grupo_contacto       = get_field('grupo_contacto', 'options');
$items                = $grupo_contacto['items'] ?? '';

$grupo_redes_sociales = get_field('grupo_redes_sociales', 'options');
$cta_correo           = $grupo_redes_sociales['cta_correo'] ?? '';
?>
<div class="pt-5 pb-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
    <div class="px-3">
        <div class="bg-white rounded-4">
            <div class="container">
                <div class="row d-flex flex-lg-row flex-column-reverse">
                    <div class="col-12 col-lg-7 pt-lg-5 pb-lg-3 py-4">
                        <div class="row">
                            <!-- Banderas -->
                            <div class="col-12 col-lg-4 mb-4">
                                <img class="rounded-circle mb-3" width="42" height="42" src="/wp-content/uploads/usa.png" srcset="" sizes="(max-width: 42px) 100vw, 42px" alt="panama - Ingeconopp | Obras Civiles y Arquitectónicas" title="panama" loading="lazy" decoding="async">                                                                                
                                <div class="d-grid gap-1">
                                <h3 class="fs-5 fw-regular">Estados Unidos</h3>
                                <!-- <p><a title="Teléfono Panamá" href="tel:50764252401" target="_blank" rel="noopener">+507 6425 2401</a></p> -->
                                <p class="">Attn. Sanchez Thomas</p>
                                <p class="">1301 K Street NW 3W</p>
                                <p class="">Washington D.C</p>
                                </div>
                            </div>
                            <div class=" col-12 col-lg-8">
                                <img class="rounded-circle mb-3" width="42" height="42" src="/wp-content/uploads/colombia.png" srcset="" sizes="(max-width: 42px) 100vw, 42px" alt="colombia - Ingeconopp | Obras Civiles y Arquitectónicas" title="colombia" loading="lazy" decoding="async">                                                                                
                                <div class="d-grid gap-1">
                                <h3 class="fs-5 fw-regular">Colombia</h3>
                                <p><a title="Teléfono Colombia" href="tel:3153312459" target="_blank" rel="noopener">(+57) 315 331 2459</a></p>
                                <p><a title="Teléfono Colombia" href="tel:3042189217" target="_blank" rel="noopener">(+57) 304 218 9217</a></p>
                                <p class="">Centro Empresarial World Trade Center, Oficina 403</p>
                                <p class="">Calle 76 No 54-11</p>
                                <p class="">Barranquilla</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 px-lg-3 px-0">
                        <div class="d-flex flex-column justify-content-center customFooterRedes px-3 pt-lg-0 pt-5 pb-lg-0 pb-3 h-100">
                            <div class="d-flex flex-column gap-2">
                                <h2 class="fs-4 fw-semibold">¿Tienes dudas?, hablemos</h2>
                                <a href="mailto:rescobar@ingeconopp.com" class="d-block fs-5" target="_blank" title="¿Tienes dudas?, hablemos">
                                    rescobar@ingeconopp.com										
                                </a>
                                <a href="mailto:sescobar@ingeconopp.com" class="d-block fs-5" target="_blank" title="¿Tienes dudas?, hablemos">
                                    sescobar@ingeconopp.com								
                                </a>
                            </div>
                            <!-- Redes sociales -->
                            <ul class="d-flex justify-content-lg-end gap-3 mt-lg-5 mt-3">
                                <!-- <li class="list-style-none">
                                <a href="#" class="d-block" target="_blank" title="Facebook">
                                <span class="sr-only">Facebook</span>
                                <img width="32" height="32" src="//localhost:3000/wp-content/uploads/icono-facebook.svg" alt="Facebook" title="Facebook">
                                </a>
                                </li>
                                <li class="list-style-none">
                                <a href="#" class="d-block" target="_blank" title="Instagram">
                                <span class="sr-only">Instagram</span>
                                <img width="32" height="32" src="//localhost:3000/wp-content/uploads/icono-instagram.svg" alt="Instagram" title="Instagram">
                                </a>
                                </li>
                                <li class="list-style-none">
                                <a href="#" class="d-block" target="_blank" title="linkedin">
                                <span class="sr-only">linkedin</span>
                                <img width="32" height="32" src="//localhost:3000/wp-content/uploads/icono-linkedIn.svg" alt="linkedin" title="linkedin">
                                </a>
                                </li> -->
                                <li class="list-style-none">
                                <a href="#" class="d-block" target="_blank" title="WhatsApp">
                                <span class="sr-only">WhatsApp</span>
                                <img width="32" height="32" src="//localhost:3000/wp-content/uploads/icono-whatsApp.svg" alt="WhatsApp" title="WhatsApp">
                                </a>
                                </li>
                            </ul>
                            <!-- Redes sociales -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>