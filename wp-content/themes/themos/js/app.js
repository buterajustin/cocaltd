function slideText(direction){
			if(direction=='prev')
				$('#slider_actualite_texte').slick('slickPrev');
			else
				$('#slider_actualite_texte').slick('slickNext');
		}

jQuery(document).ready(function($)){
		
	$(function(){
		var slider_actualite_image = $('#slider_actualite_image').slick({
		  infinite: true,
		  slidesToShow: 1,
		  slidesToScroll:1,
		  fade: true,
		  arrows:true,
		  prevArrow:'<i onclick="slideText(\'prev\')" class="fa fa-chevron-circle-left slick-prev"></i>',
		  nextArrow:'<i onclick="slideText(\'next\')" class="fa fa-chevron-circle-right slick-next"></i>',
		  autoplaySpeed:6000,
		  autoplay: true		});
		
		$("#slider_actualite_image").on('beforeChange', function(event, slick, currentSlide, nextSlide){
			$('#slider_actualite_texte').slick('slickNext');
		});
			
	});

	$(function(){
			var slider_actualite_texte = $('#slider_actualite_texte').slick({
			  infinite: true,
			  slidesToShow: 1,
			  slidesToScroll:1,
			  fade: true,
			  arrows:0,
			  autoplaySpeed:6000,
			  autoplay: false
			});
	});
}