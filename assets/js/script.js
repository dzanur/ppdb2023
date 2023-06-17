// search validation
var forms = document.querySelectorAll(".needs-validation");

Array.prototype.slice.call(forms).forEach(function(form) 
{
    form.addEventListener ("submit", function(event) {
        if ( !form.checkValidity ()){
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