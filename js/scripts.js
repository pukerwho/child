$('.toogle-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('toogle-menu_active');
  $('.slide-menu').toggleClass('slide-menu_active');
  $('.menu li').toggleClass('animate-left');
});

$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 56) {
    $('header').addClass('header__fixed')
  } else {
    $('header').removeClass('header__fixed')
  }
})

//Плавный скролл
$(document).on('click', '.scroll-down a[href^="#"]', function (event) {
  event.preventDefault();
  var target = $($.attr(this, 'href'));
  var targetScroll =  target.offset().top - 50
  $('html, body').animate({
      scrollTop: targetScroll
  }, 500);
});

function showMemebers(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("p_about__button");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("p_about__button-active", "");
  }
  document.getElementById(tabName).style.display = "flex";
  evt.currentTarget.className += " p_about__button-active";
}

function showNews(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("p_news__button");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("p_news__button-active", "");
  }
  document.getElementById(tabName).style.display = "flex";
  evt.currentTarget.className += " p_news__button-active";
}

//Слайдер Анонси
var swiper_ad_button_next = $('.swiper-ad-next');
var swiper_ad_button_prev = $('.swiper-ad-prev');
var mySwiperAd = new Swiper('.ad-item-swiper', {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  navigation: {
    nextEl: swiper_ad_button_next,
    prevEl: swiper_ad_button_prev,
  },
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
});

//Слайдер Новости/Блог
var swiper_single_button_next = $('.swiper-single-next');
var swiper_single_button_prev = $('.swiper-single-prev');
var mySwiperAd = new Swiper('.single-gallery-swiper', {
  slidesPerView: 4,
  spaceBetween: 30,
  navigation: {
    nextEl: swiper_single_button_next,
    prevEl: swiper_single_button_prev,
  },
  pagination: {
    el: '.single-gallery-pagination',
  },
});

//Слайдер Партнеры
var swiper_partner_button_next = $('.swiper-partner-next');
var swiper_partner_button_prev = $('.swiper-partner-prev');
var mySwiperAd = new Swiper('.about-partner-swiper', {
  slidesPerView: 6,
  spaceBetween: 50,
  navigation: {
    nextEl: swiper_partner_button_next,
    prevEl: swiper_partner_button_prev,
  },
  pagination: {
    el: '.about-partner-pagination',
  },
});

//Слайдер Отчеты
var swiper_reports_button_next = $('.swiper-reports-next');
var swiper_reports_button_prev = $('.swiper-reports-prev');
var mySwiperAd = new Swiper('.about-reports-swiper', {
  slidesPerView: 8,
  spaceBetween: 66,
  navigation: {
    nextEl: swiper_reports_button_next,
    prevEl: swiper_reports_button_prev,
  },
  pagination: {
    el: '.about-reports-pagination',
  },
});

//Back link
$(document).on('click', '.single__back', function(){
  history.back();
});