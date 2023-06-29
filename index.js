'use strict';
{
     $(function(){
            $(window).scroll(function (){
                $('.fade').each(function(){
                    var targetElement = $(this).offset().top;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();
                    if (scroll > targetElement - windowHeight + 35) {
                        $(this).css('opacity','1');
                        $(this).css('transform','translateY(0)');
                    }
                });
            });
        });
    alert("?sssddds");
  // DOM取得
  // 親メニューのli要素
  const parentMenuItem = document.querySelectorAll('.menu__item');
  console.log(parentMenuItem);

  // イベントを付加
  for (let i = 0; i < parentMenuItem.length; i++) {
    parentMenuItem[i].addEventListener('mouseover', dropDownMenuOpen);
  }

  // ドロップダウンメニューを開く処理
  function dropDownMenuOpen(e) {
    // 子メニューa要素
    const childMenuLink = e.currentTarget.querySelectorAll('.drop-menu__link');
    console.log(childMenuLink);

    // is-activeを付加
    for (let i = 0; i < childMenuLink.length; i++) {
      childMenuLink[i].classList.add('is-active');
    }

  }

}