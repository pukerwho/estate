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

//Плавный скролл
$(document).on('click', 'header a[href^="#"]', function (event) {
  event.preventDefault();
  var target = $($.attr(this, 'href'));
  console.log(target.offset());
  var targetScroll =  target.offset().top - 50
  $('html, body').animate({
      scrollTop: targetScroll
  }, 500);
});

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
  values: [20, 200],
  step: 20,
  slide: function( event, ui ) {
    $( "#min-square").html(ui.values[ 0 ]);
    $( "#max-square").html(ui.values[ 1 ]);

    document.getElementById('square_min_value').value = ui.values[0]
    document.getElementById('square_max_value').value = ui.values[1]
  }
});

$(".b_filter__range__price #slider-range").slider({
  range: true, 
  min: 15000,
  max: 300000,
  values: [15000, 300000],
  step: 5000,
  slide: function( event, ui ) {
    $( "#min-price").html(ui.values[ 0 ]);
    $( "#max-price").html(ui.values[ 1 ]);
    document.getElementById('price_min_value').value = ui.values[0]
    document.getElementById('price_max_value').value = ui.values[1]
  }
});

//B_Filter
$('#filter-id').submit(function(){
  var filter = $(this);
  console.log(this);
  console.log(filter.serialize());
  $.ajax({
    url:ajaxurl, // обработчик
    data:filter.serialize(), // данные
    type:filter.attr('method'), // тип запроса
    beforeSend:function(xhr){
      filter.find('button').text('Загружаю...'); // изменяем текст кнопки
    },
    success:function(data){
      console.log(data);
      filter.find('button').text('Искать'); // возвращаеи текст кнопки
      $response = $('#response .row');
      $response.html(data);
    }
  });
  return false;
});