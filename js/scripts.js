$('.toogle-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('toogle-menu_active');
  $('.slide-menu').toggleClass('slide-menu_active');
  $('.menu li').toggleClass('animate-left');
});

$('.slide-menu a').on('click', function(e){
  e.preventDefault;
  $('.toogle-menu').removeClass('toogle-menu_active');
  $('.slide-menu').removeClass('slide-menu_active');
})

$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 56) {
    $('header').addClass('header__fixed')
  } else {
    $('header').removeClass('header__fixed')
  }
})

if ($(document).width() > 640) {
  $('#lightSlider').lightSlider({
    gallery: true,
    item: 1,
    loop: true,
    slideMargin: 0,
    thumbItem: 6,
  })
};

if ($(document).width() < 640) {
  $('#lightSlider').lightSlider({
    gallery: true,
    item: 1,
    loop: true,
    slideMargin: 0,
    thumbItem: 4,
  })
};


$(".b_filter__range__square #slider-range").slider({
  range: true, 
  min: 20,
  max: 200,
  step: 20,
  slide: function( event, ui ) {
    $( "#min-square").html(ui.values[ 0 ]);
    $( "#max-square").html(ui.values[ 1 ]);
  }
});

$(".b_filter__range__price #slider-range").slider({
  range: true, 
  min: 15000,
  max: 300000,
  step: 5000,
  slide: function( event, ui ) {
    $( "#min-price").html(ui.values[ 0 ]);
    $( "#max-price").html(ui.values[ 1 ]);
  }
});