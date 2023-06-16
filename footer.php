
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
 <script>
    document.addEventListener('contextmenu', (e) => e.preventDefault());

    function ctrlShiftKey(e, keyCode) {
    return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
    }

    document.onkeydown = (e) => {
    // Disable F12, Ctrl + Shift + I, Ctrl + Shift + J, Ctrl + U
    if (
        event.keyCode === 123 ||
        ctrlShiftKey(e, 'I') ||
        ctrlShiftKey(e, 'J') ||
        ctrlShiftKey(e, 'C') ||
        (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
    )
        return false;
    };

    // back to top
    // Get the button
    let mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
</script>

</body>
</html>