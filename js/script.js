$('.scroll-to-form').on('click', function () {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".form-side").offset().top
    }, 500)
})