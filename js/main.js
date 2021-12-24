jQuery(function(){

  //メインビジュアルの高さを取得して変数にする
  var mvHight = $('.mv').outerHeight(true);

  //画面をスクロールしたらフェードイン
  $(window).scroll(function(){
    if($(this).scrollTop()>mvHight){
      $('#toTop').fadeIn(400);
    }
    else{
      $('#toTop').fadeOut(400);
    }
  });

  //バーガーメニュー
  $('#show').on('click', function(){
    $(this).toggleClass('active');
    $('body').toggleClass('active');
    $('#screen').toggleClass('active');
    $('#sp-nav').toggleClass('slidein');
  });
  
  $('.nav-menu li a').on('click', function () {
      $('#show').removeClass('active');
      $('body').removeClass('active');
      $('#screen').removeClass('active');
      $('#sp-nav').removeClass('slidein');
  });

  $('#screen').on('click', function () {
    $('.nav-menu li a').click();
  });

    // サイズを変えた時にハンバーガーメニューの処理を消す
    $(window).on('load resize', function(){
      var w = $(window).width();
      var x = 1025;

    if (w <= x) {
      $('.nav-menu li a').click();
    }
  });

  // worksのカードにカーソルが乗った時の動き
  $('.item-card').hover(function(){
    $(this).find('img').css('transform','scale(1.1, 1.1)');
  },function(){
    $(this).find('img').css('transform','scale(1, 1)');
  });
  
  // メニューをクリックで任意の場所へ
  $('.header-nav ul li a').on('click', function(){
    var id =$(this).attr('href');
    var pos = $(id).offset().top;
    $('html, body').animate({'scrollTop': pos}, 300);
  });

  //「topへ戻る」関連
  $('#toTop').hide(); //topへ戻るボタン
  $('#toTop').click(function(){ 
    $('html,body').animate({'scrollTop':0},500);

    $(this).animate({'bottom':'10%'},300,function(){
      $(this).animate({'bottom': '6%'},300)
    });
    return false;
  });


  // 記事ページのデモ
  $('.pc-image, .sp-image').hide();
  $('#pcToggle').click(function(){ 
    $('.pc-image').slideToggle(400);
    return false;
  });

  $('#spToggle').click(function(){ 
    $('.sp-image').slideToggle(400);
    return false;
  });





});