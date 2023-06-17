
<div class="container-fluid pt-1 bg-dark ">
    <div class="container">
        <footer class="d-flex justify-content-between align-items-center pt-2 pb-5  mt-3 shadow-top">
          <div class="col-md-4 d-flex ps-lg-5 align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-light text-decoration-none lh-1">
                <img src="assets/img/logo.png" width ="40px" alt="">
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
<a id="button"></a>
<!-- <style>
#button {
  display: inline-block;
  background-color: #FF9800;
  width: 50px;
  height: 50px;
  text-align: center;
  border-radius: 4px;
  position: fixed;
  bottom: 30px;
  right: 30px;
  transition: background-color .3s, 
    opacity .5s, visibility .5s;
  opacity: 0;
  visibility: hidden;
  z-index: 1000;
}
#button::after {
  content: "\f077";
  font-family: FontAwesome;
  font-weight: normal;
  font-style: normal;
  font-size: 2em;
  line-height: 50px;
  color: #fff;
}
#button:hover {
  cursor: pointer;
  background-color: #333;
}
#button:active {
  background-color: #555;
}
#button.show {
  opacity: 1;
  visibility: visible;
}
</style> -->
<!-- <script>
  var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});


</script> -->
</body>
</html>