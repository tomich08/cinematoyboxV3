// JavaScript Document


/********************MAIN SLIDESHOW**********************/

$(function() {

    //settings for slider
    var width = 1280;
    var animationSpeed = 3500;
    var pause = 8000;
    var currentSlide = 1;

    //cache DOM elements
    var $slider = $('#slider');
    var $slideContainer = $('.slides', $slider);
    var $slides = $('.slide', $slider);

    var interval;

    function startSlider() {
        interval = setInterval(function() {
            $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() {
                if (++currentSlide === $slides.length) {
                    currentSlide = 1;
                    $slideContainer.css('margin-left', 0);
                }
            });
        }, pause);
    }
    function pauseSlider() {
        clearInterval(interval);
    }

    

    startSlider();


});





$(function() {

    //settings for slider
    var width = 1280;
    var animationSpeed = 3000;
    var pause = 8000;
    var currentSlide = 1;

    //cache DOM elements
    var $slider = $('#slideOne');
    var $slideContainer = $('.slideTwo', $slider);
    var $slides = $('.slideThree', $slider);

    var interval;

    function startSlider() {
        interval = setInterval(function() {
            $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() {
                if (++currentSlide === $slides.length) {
                    currentSlide = 1;
                    $slideContainer.css('margin-left', 0);
                }
            });
        }, pause);
    }
    function pauseSlider() {
        clearInterval(interval);
    }

    

    startSlider();


});




$(function() {

    //settings for slider
    var width = 1280;
    var animationSpeed = 2500;
    var pause = 8000;
    var currentSlide = 1;

    //cache DOM elements
    var $slider = $('#slideFour');
    var $slideContainer = $('.slideFive', $slider);
    var $slides = $('.slideSix', $slider);

    var interval;

    function startSlider() {
        interval = setInterval(function() {
            $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() {
                if (++currentSlide === $slides.length) {
                    currentSlide = 1;
                    $slideContainer.css('margin-left', 0);
                }
            });
        }, pause);
    }
    function pauseSlider() {
        clearInterval(interval);
    }

    

    startSlider();


});





$(function() {

    //settings for slider
    var width = 1280;
    var animationSpeed = 2000;
    var pause = 8000;
    var currentSlide = 1;

    //cache DOM elements
    var $slider = $('#slideSeven');
    var $slideContainer = $('.slideEight', $slider);
    var $slides = $('.slideNine', $slider);

    var interval;

    function startSlider() {
        interval = setInterval(function() {
            $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() {
                if (++currentSlide === $slides.length) {
                    currentSlide = 1;
                    $slideContainer.css('margin-left', 0);
                }
            });
        }, pause);
    }
    function pauseSlider() {
        clearInterval(interval);
    }

    

    startSlider();


});

/**************************END MAIN SLIDESHOW*************************/






/*document.getElementsByTagName("a")[8].onclick = 
	function(){
		navDrop();
	}

var nav = "none"

function navDrop(){
	if(nav == "none"){
		document.getElementsByClassName("nav_drop")[0].style.display = "block";
		
		nav = "block";
		}
		else if(nav == "block"){
			document.getElementsByClassName("nav_drop")[0].style.display = "none";
			
			nav = "none";
			}
			
}*/


