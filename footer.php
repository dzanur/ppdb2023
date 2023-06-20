
<div class="container-fluid pt-1 bg-dark ">
    <div class="container">
        <footer class="d-flex justify-content-between align-items-center pt-2 pb-5  mt-3 shadow-top">
          <div class="col-md-4 d-flex ps-lg-5 align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-light text-decoration-none lh-1">
                <img src="assets/img/logo.png" width ="40px" alt="SMAN 9 Tangerang">
            </a>
            <span class="mb-3 mb-md-0 text-light">© 2021-<?php echo date("Y"); ?> SMAN 9 Tangerang</span>
          </div>
      
          <ul class="nav col-md-4 justify-content-end pe-lg-5 list-unstyled d-flex">
            <li class="ms-2"><a class="text-light" href="https://www.youtube.com/@SMAN9Tangerang" target="_BLANK"><i class="fa-brands fa-youtube"></i></a></li>
            <li class="ms-2"><a class="text-light" href="https://www.instagram.com/official.sman9tangerang/" target="_BLANK"><i class="fa-brands fa-instagram"></i></a></li>
            <li class="ms-2"><a class="text-light" href="https://www.facebook.com/smanlanta/" target="_BLANK"><i class="fa-brands fa-facebook"></i></a></li>
          </ul>
        </footer>
        <!--<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>-->
    </div>
</div>
<!-- <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script> -->
<script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/js/script.js"></script>
<script>
  var base_url = window.location.origin;
  document.addEventListener('DOMContentLoaded', init, false);

  function init() {
      if ('serviceWorker' in navigator && navigator.onLine) {
          navigator.serviceWorker.register( base_url + '/service-worker.js')
          .then((reg) => {
              console.log('Registrasi service worker Berhasil', reg);
          }, (err) => {
              console.error('Registrasi service worker Gagal', err);
          });
      }
  }
</script>

</body>
</html>