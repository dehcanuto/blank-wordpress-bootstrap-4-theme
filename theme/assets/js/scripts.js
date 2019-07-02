/*
 * Blank WordPress Template v1.0
 * Copyright 2019, André Canuto
 * 
 * Distributed under License.
 * Date: Mar 14, 2019
*/

console.log('🚧 bem-vindo ao tema branco! 🚧');

/* função do search */
$('#searchsubmit').click(function(e){
	e.preventDefault();
	$('#searchform').hasClass('active') ? $('#searchform').submit() : $('#searchform').addClass('active');
});

$(window).scroll(function(){
	/* header fixo */
	$(this).scrollTop() > 120 ? $("header").addClass('head-fixed') : $("header").removeClass('head-fixed');
	/* função do voltar ao topo */
	$(this).scrollTop() > 300 ? $(".subir-topo").show() : $(".subir-topo").hide();
	/* função de mudar a cor do voltar ao topo */
	var scrollHeight = $(document).height();
	var scrollPosition = $(window).height() + $(window).scrollTop();
	( ( scrollHeight - scrollPosition ) / scrollHeight <= 0.138 ) ? $(".subir-topo i").addClass('text-white') : $(".subir-topo i").removeClass('text-white');
});

$(".subir-topo").on('click', function (e) {
	e.preventDefault();
	$("html, body").animate({
		scrollTop: 0
	}, 600);
});

$('.navbar-toggler').click(function(e){
	e.preventDefault();
	$('body').toggleClass('mobile-open');
});

/* essa funcao nao faz nada quando o # estiver no href */
$('[href="#"]').on('click', function () {
    return false;
});

(function ($) {
    "use strict";

    jQuery.fn.exists = function () {
        return this.length > 0;
    };

    // slides das páginas.
    var func = {
        slides: {
			slideblog: function () {
				$('.head-posts-slide').slick({
					infinite: true,
					dots: true,
					arrows: false,
					speed: 300,
					slidesToShow: 1,
					autoplay: true,
					autoplaySpeed: 4000
				});
            },
            leiaMais: function () {
				$('.leia-mais-slide').slick({
					infinite: true,
					dots: true,
					arrows: false,
					speed: 300,
					slidesToShow: 3,
					autoplay: true,
					autoplaySpeed: 4000,
					responsive: [
					    {
					      breakpoint: 600,
					      settings: {
					        slidesToShow: 1,
					        slidesToScroll: 1
					      }
					    }
					  ]
				});
            },
            init: function () {
                func.slides.slideblog();
                func.slides.leiaMais();
            }
        },
        init: function () {
            func.slides.init();
        }
    };
    func.init();
})(jQuery);