<?php 
?>

  <footer class="bg-gray-200 py-5">
    <div class="py-lg-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="col-12 col-lg-10 mx-auto">
              <h2 class="fs-1-medium text-white fw-semibold mb-lg-0 mb-2">Contáctanos</h2>
              <p class="fs-5 text-white mb-lg-0 mb-5">
                Nos mueve el compromiso, la calidad humana  y la excelencia en cada detalle
              </p>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="mb-5">
              <h3 href="" class="fs-5 text-secondary-100">Información general</h3>
              <a href="" class="fs-5 text-white-100" target="_blank" title="Correo electrónico">rescobar@ingeconopp.com</a>
            </div>
            <div>
            <h3 class="fs-5 text-secondary-100 mb-2">Visitanos</h3>
            <div class="row">
              <div class="col-12 col-lg-4 mb-lg-0 mb-4">
                <img class="rounded-circle mb-3" src="<?php echo THEME_IMG; ?>panama.png" alt="Logo Panamá">
                <h3 class="fs-5 fw-regular text-white-100">Panamá</h3>
                <a class="parrafo-small text-white-100" href="tel:50764252401" target="_blank" title="Teléfono Panamá">+507 6425 2401</a>
                <p class="parrafo-small text-white-100">Edificio Plaza 2000, Piso 11.</p>
                <p class="parrafo-small text-white-100">Calle 53 Marbella</p>
              </div>
              <div class="col-12 col-lg-8">
                <img class="rounded-circle mb-3" src="<?php echo THEME_IMG; ?>colombia.png" alt="Logo Colombia">
                <h3 class="fs-5 fw-regular text-white-100">Colombia</h3>
                <a class="parrafo-small text-white-100" href="tel:573133312459" target="_blank" title="Teléfono Colombia">+57 313 331 2459</a>
                <p class="parrafo-small text-white-100">Centro Empresarial World Trade Center, Oficina 403</p>
                <p class="parrafo-small text-white-100">Calle 76 No 54-11</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
    <script src="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/css/libs/animate.min.css">
    <script>
      wow = new WOW(
        {
          animateClass: 'animated',
          offset:       100,
          callback:     function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
          }
        }
      );
      wow.init();
      document.getElementById('moar').onclick = function() {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
      };
    </script>
</body>
</html>