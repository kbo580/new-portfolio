jQuery(function($){


$(function(){

  //メインビジュアルの高さを取得して変数にする
  var mvHight = $('.mv').outerHeight(true);

  //画面をスクロールしたらフェードイン
  $(window).scroll(function(){
    if($(this).scrollTop()>mvHight){
      $('#toTop').fadeIn(400);
      $('.fixed-icon').fadeIn();
    }
    else{
      $('#toTop').fadeOut(400);
      $('.fixed-icon').fadeOut();
    }
  });

  /* ----スマホ用ナビ ----*/
  //開閉ボタン
  $('.open-icon').on('click', function(){
    $('#sp-nav').addClass('is-active');
    $('body').addClass('is-active');
  });

  $('#close').on('click', function(){
    $('#sp-nav').removeClass('is-active');
    $('body').removeClass('is-active');
  });

  //スクロールで固定するヘッダー
  $(window).on('scroll', function(){
    if($(this).scrollTop()>= 500){ 
      $('.fixed-icon-wrapper').fadeIn();
    }
    else{
      $('.fixed-icon-wrapper').fadeOut();
    }
  });
  
  //リンクをクリックしたとき
  $('.sp-nav-wrapper .nav-list li a').on('click', function () {
    $('body').removeClass('is-active');
    $('#sp-nav').removeClass('is-active');
  });

  //pc用カーソル
  $('.pc-nav .nav-list li a').hover(function(){
    $(this).prev().css('opacity', '1');
  
  }, function(){
    $(this).prev().css('opacity', '0');
  });

  // メニューをクリックで任意の場所へ
  $('.pc-nav ul li a').on('click', function(){
    var id =$(this).attr('href');
    var pos = $(id).offset().top;
    $('html, body').animate({'scrollTop': pos}, 300);
  });

  // worksのカードにカーソルが乗った時の動き
  $('.item-card').hover(function(){
    $(this).find('img').css('transform','scale(1.1, 1.1)');
  },function(){
    $(this).find('img').css('transform','scale(1, 1)');
  });
  
  //「topへ戻る」関連
  $('#toTop').hide(); 
  $('#toTop').click(function(){ 
    $('html,body').animate({'scrollTop':0},500);
    $(this).animate({'bottom':'10%'},300,function(){
      $(this).animate({'bottom': '2%'},300)
    });
    return false;
  });

  // 記事ページのデモ
  $('#pcToggle').click(function(){ 
    $('.pc-image').slideToggle(400);
    return false;
  });

  $('#spToggle').click(function(){ 
    $('.sp-image').slideToggle(400);
    return false;
  });

  //メインビジュアルのタイピング
  function TextTypingAnime() {
    $('.TextTyping').each(function () {
      var elemPos = $(this).offset().top - 50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      var thisChild = "";
      if (scroll >= elemPos - windowHeight) {
        thisChild = $(this).children();
        thisChild.each(function (i) {
          var time = 100;
          $(this).delay(time * i).fadeIn(time);
        });
      } else {
        thisChild = $(this).children();
        thisChild.each(function () {
          $(this).stop(); 
          $(this).css("display", "none");
        });
      }
    });
  }

  $(window).on('load', function () {
    var element = $(".TextTyping");
    element.each(function () {
      var text = $(this).html();
      var textbox = "";
      text.split('').forEach(function (t) {
        if (t !== " ") {
          textbox += '<span>' + t + '</span>';
        } else {
          textbox += t;
        }
      });
      $(this).html(textbox);

    });

    $('.TextTyping span:nth-child(12)').append('<br>');

    TextTypingAnime();
  });



  var fixedHeaderHight = $('.fixed-icon-wrapper').outerHeight(true);
console.log(fixedHeaderHight)
  $(window).on('scroll', function(){
    var section = $('.mv').offset().top;
    if($(this).scrollTop()>= section-fixedHeaderHight){ 
      $('header').addClass('fadein');
    }
    else{
      $('header').removeClass('fadein');
    }
  });
  
  // メニューをクリックで任意の場所へ
  $('.sp-nav-list ul li a').on('click', function(){
    var id =$(this).attr('href');
    var pos = $(id).offset().top-fixedHeaderHight+1;
    $('html, body').scrollTop(pos);
    return false;
  });
  





});
});
