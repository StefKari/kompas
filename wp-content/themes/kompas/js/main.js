

$(".fancybox").fancybox();


$(".fancybox1").fancybox();

  $(".menu-toggle").click(function(){
    $('nav').fadeToggle('fast');
    $('.modal').fadeToggle();
     $(".menu-toggle").toggleClass("active");
    $(".modal").toggleClass("modal-active");
    $("nav").toggleClass("nav-active");
  });


 // TABS 1


  $('.tab_content').hide();
  $('.tab_content:first').show();
  $('.tabs li a:first').addClass('a-active');
  $('.tabs li').click(function(event) {
event.preventDefault();

  $('.tab_content').hide();

     var selectTab = $(this).find('a').attr("href");
     $(selectTab).fadeIn();
  });

// ACTIVE BUTTON


$(".links li a").on('click', function(e){

    $(".a-active").removeClass('a-active');

    $(this).addClass('a-active');

});

$(".links-1 li a").on('click', function(e){

    $(".a-active-1").removeClass('a-active-1');

    $(this).addClass('a-active-1');

});



// GRADIENT

var colors = new Array(

  [62,35,255],

  [60,255,60],

  [255,35,98],

  [45,175,230],

  [255,0,255],

  [255,128,0]);



var step = 0;

//color table indices for:

// current color left

// next color left

// current color right

// next color right

var colorIndices = [0,1,2,3];



//transition speed

var gradientSpeed = 0.002;



function updateGradient()

{



  if ( $===undefined ) return;



var c0_0 = colors[colorIndices[0]];

var c0_1 = colors[colorIndices[1]];

var c1_0 = colors[colorIndices[2]];

var c1_1 = colors[colorIndices[3]];



var istep = 1 - step;

var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);

var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);

var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);

var color1 = "rgb("+r1+","+g1+","+b1+")";



var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);

var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);

var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);

var color2 = "rgb("+r2+","+g2+","+b2+")";



 $('#gradient').css({

   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({

    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});



  step += gradientSpeed;

  if ( step >= 1 )

  {

    step %= 1;

    colorIndices[0] = colorIndices[1];

    colorIndices[2] = colorIndices[3];



    //pick two new target color indices

    //do not pick the same as the current one

    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;

    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;



  }

}



setInterval(updateGradient,2);


// own carousel



$('#slider1, #slider2').owlCarousel({

    loop:true,

    margin:10,

    nav:true,

    autoplay: true,

    autoplayTimeout: 3000,

    responsive:{

        0:{

            items:2

        },

        600:{

            items:3

        },

        1000:{

            items:3

        }

    }

});



$('#slider3').owlCarousel({

    loop:true,

    margin:10,

    nav:true,

    autoplay: true,

    autoplayTimeout: 3000,

    responsive:{

        0:{

            items:1

        },

        600:{

            items:1

        },

        1000:{

            items:1

        }

    }

});


// Show more

$('.opsirnije').click(function(){

  $('.show-more').slideToggle();

});


  $(function() {
  $('.plus-minus-toggle').on('click', function() {
    $(this).toggleClass('collapsed');
  });
});







// SCROLL TOP



$('.top').click(function(){

  $('html, body').animate({scrollTop: 0},1000);

});


 // Menu fixed for internal pages
    if ($('body').hasClass('interior')) {
    $('.logo').show();
    }

//Menu top fixed
     if ($('body').hasClass('home')) {
      $('.header').addClass('header-none');


  $(document).scroll(function() {
    if($(document).scrollTop() > 300) {
      $('.logo, .show-on-mobile').css({ opacity: 1 });

    }
    else {
      $('.logo, .show-on-mobile').css({ opacity: 0 });

    }
  })

}

 if ($('body').hasClass('home')) {
  $('.logo, .show-on-mobile').css('opacity', '0');
 }




// scrool function

  $(document).scroll(function() {
    if($(document).scrollTop() > 300) {
      $('.header').addClass('header-visible');

    }
    else {
      $('.header').removeClass('header-visible');

    }
  })