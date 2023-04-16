$(function() {
    $(document).scroll(function() {
        var $nav = $(".nabvar-fixed-top");
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
    });
});