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


  function slideAnime(){
    //====左に動くアニメーションここから===
      $('.leftAnime').each(function(){ 
        var elemPos = $(this).offset().top-50;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight){
          //左から右へ表示するクラスを付与
          //テキスト要素を挟む親要素（左側）とテキスト要素を元位置でアニメーションをおこなう
          $(this).addClass("slideAnimeLeftRight"); //要素を左枠外にへ移動しCSSアニメーションで左から元の位置に移動
          $(this).children(".leftAnimeInner").addClass("slideAnimeRightLeft");  //子要素は親要素のアニメーションに影響されないように逆の指定をし元の位置をキープするアニメーションをおこなう
        }else{
          //左から右へ表示するクラスを取り除く
          $(this).removeClass("slideAnimeLeftRight");
          $(this).children(".leftAnimeInner").removeClass("slideAnimeRightLeft");
          
        }
      });
      
    }
    
    // 画面をスクロールをしたら動かしたい場合の記述
    $(window).scroll(function (){
      slideAnime();/* アニメーション用の関数を呼ぶ*/
    });// ここまで画面をスクロールをしたら動かしたい場合の記述
  
    // 画面が読み込まれたらすぐに動かしたい場合の記述
    $(window).on('load', function(){
      slideAnime();/* アニメーション用の関数を呼ぶ*/
    });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述








});