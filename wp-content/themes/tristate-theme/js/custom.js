jQuery(document).ready(function() {
    jQuery("#simple-menu").sidr({
        side: "right"
    });
});

jQuery(".page").on("click", function() {
    $.sidr("close");
});

jQuery(window).on("resize", function() {
    if ($("body").hasClass("sidr-open") && $(window).width() >= 768) {
        $.sidr("close");
    }
});