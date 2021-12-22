jQuery(function(){

  $('.item-card').hover(function(){
    $(this).find('img').css('transform','scale(1.1, 1.1)');
  },function(){
    $(this).find('img').css('transform','scale(1, 1)');
  });

  var mvHight = $('.mv').outerHeight(true);

  // $(window).on('scroll', function(){
  //   if($(this).scrollTop()>= headerHight){
  //     $('header').addClass('fixed');
  //   }
  //   else{
  //     $('header').removeClass('fixed');
  //   }
  // });

  $('.header-nav ul li a').on('click', function(){
    var id =$(this).attr('href');
    var pos = $(id).offset().top;
    $('html, body').animate({'scrollTop': pos}, 300);
  });

  // ボタンを隠す
  $('#toTop').hide();

  //画面をスクロールしたらフェードイン
  $(window).scroll(function(){
    if($(this).scrollTop()>mvHight){
      $('#toTop').fadeIn(400);
    }
    else{
      $('#toTop').fadeOut(400);
    }
  });

  //「topへ戻る」ボタンを押すとtopから0の地点へスクロールする
  $('#toTop').click(function(){ 
    $('html,body').animate({'scrollTop':0},500);

    $(this).animate({'bottom':'10%'},300,function(){
      $(this).animate({'bottom': '6%'},300)
    });
    return false;
  });









});