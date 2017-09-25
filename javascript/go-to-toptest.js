/* global $ */

//Next two blocks of code with comments are to be used for the "Back to top" button
// When the user scrolls down 20px from the top of the document, show the button

window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
        document.getElementById("go-to-top").style.display = "block";
    }
    else {
        document.getElementById("go-to-top").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera
    document.documentElement.scrollTop = 0; // For IE and Firefox
}
