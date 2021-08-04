$(document).ready(function () {

    $(".dropdown").hover(function () {
        let dropdownMenu = $(this).children(".dropdown");
        if (dropdownMenu.is(":visible")) {
            dropdownMenu.parent().toggleClass("show");
        }
    });

    

});