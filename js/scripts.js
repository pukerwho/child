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

function showReports(evtReport, tabReportName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent-report");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("b_reports__button");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("b_reports__button-active", "");
  }
  document.getElementById(tabReportName).style.display = "block";
  evtReport.currentTarget.className += " b_reports__button-active";
  $('.tabcontent-report').trigger('resize');
  reportFinstructuraSwiper();
  reportFinreportSwiper();
  
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
var mySwiperGallery = new Swiper('.single-gallery-swiper', {
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
var mySwiperPartner = new Swiper('.about-partner-swiper', {
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

//Слайдер Фінансові звіти 
var reportFinreportSwiper = function() {
  var swiper_reports_finreport_button_next = $('.swiper-reports-next-finreport');
  var swiper_reports_finreport_button_prev = $('.swiper-reports-prev-finreport');
  var mySwiperFinreport = new Swiper('.about-reports-finreport-swiper', {
    slidesPerView: 8,
    spaceBetween: 66,
    navigation: {
      nextEl: swiper_reports_finreport_button_next,
      prevEl: swiper_reports_finreport_button_prev,
    },
    pagination: {
      el: '.about-reports-finreport-pagination',
    },
  });
}
reportFinreportSwiper();

//Слайдер Структура фінансування
var reportFinstructuraSwiper = function() {
  var swiper_reports_finstructura_button_next = $('.swiper-reports-next-finstructura');
  var swiper_reports_finstructura_button_prev = $('.swiper-reports-prev-finstructura');
  var mySwiperFinstructura = new Swiper('.about-reports-finstructura-swiper', {
    slidesPerView: 8,
    spaceBetween: 66,
    navigation: {
      nextEl: swiper_reports_finstructura_button_next,
      prevEl: swiper_reports_finstructura_button_prev,
    },
    pagination: {
      el: '.about-reports-finstructura-pagination',
    },
  });
}
reportFinstructuraSwiper();

//Back link
$(document).on('click', '.single__back', function(){
  history.back();
});