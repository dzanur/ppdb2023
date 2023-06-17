document.addEventListener("DOMContentLoaded", function(){
		
    window.addEventListener('scroll', function() {
         
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
         document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
    });
  }); 
  // DOMContentLoaded  end
// search validation
var forms = document.querySelectorAll(".needs-validation");

Array.prototype.slice.call(forms).forEach(function(form) {
    form.addEventListener ("submit", function(event) {
        if ( !form.checkValidity () ) {
            event.preventDefault();
            event.stopPropagation();  
        }
        form.classList.add("was-validated");
    }, false );
});

// disabled shortcut and inspect
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
