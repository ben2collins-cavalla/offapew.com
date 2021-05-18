jQuery.noConflict();
(function($){
    var header = $("header nav ul");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 200) {
			header.removeClass('nav justify-content-center').addClass("nav navbar-nav");
			$('header .logo_top').hide();
			$('header .logo_bottom').show();

        } else {
			header.removeClass("nav navbar-nav").addClass('nav justify-content-center');
			$('header .logo_top').show();
			$('header .logo_bottom').hide();
        }
    });
})(jQuery);