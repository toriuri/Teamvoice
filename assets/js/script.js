$(document).ready(function(){
  let
    $body=$('body'),
    $win=$(window),
    $mBtn=$('.btn-side-menu'),
    $fullMenu_d1=$('.gnb-list-box'),
    $fullMenuLinks=$fullMenu_d1.find('a'),
    $gnbDepth1=$('.gnb-list >li'),
    $gnbDepth1Link=$('.gnb-list >li >a'),
    $gnbDepth1_on,
    $gnbDepth2=$gnbDepth1.find('li>a'),
    $gnbDepth2_on,
    $btnFamily=$('.btn-family-site'),
    $iconFamily=$btnFamily.find('i'),
    $listFamily=$('.family-site-box').find('.list-box'),
    flagFamily=false,
    d1_name=['product','guide','customer'],
    winW=$win.width(),
    btnTab_gap;

    getBtnTab_gap();
    $(window).resize(function(){
      getBtnTab_gap() 
    });

  //d1,d2 현재 메뉴 표시
  //$gnbDepth1 .on 추가
  //$gnbDepth2 .is-current 추가
  //$fullMenuLinks  .is-current 추가
   let gnb_index,
   menu_index,
   page_path = window.location.pathname,
   page_file= page_path.substring(page_path.lastIndexOf("/"));
   d1_name.forEach(function(el,index) {
      // if(page_path.includes(el)) {
        if(page_path.indexOf(el)>-1){
        gnb_index=index;
        
      }
   });

   $gnbDepth1_on=$($gnbDepth1[gnb_index]);
   $gnbDepth1.removeClass('on');
   $gnbDepth1_on.addClass('on');
   
   $gnbDepth2.each(function(index,el){
    // if($(el).prop('href').includes(page_file)) {
      if(page_file.length>2 && $(el).prop('href').indexOf(page_file)>-1 ) {
      menu_index=index;
    }
   });

   $gnbDepth2_on=$($gnbDepth2[menu_index]);
   $gnbDepth2_on.addClass('is-current');
   $($fullMenuLinks[menu_index]).addClass('is-current');
  
  /* 햄버거 메뉴 클릭 */
  $mBtn.click(function(){
    $body.toggleClass('nav-opened');
    return false;
});

  $body.on('touchstart click', function(e){
    let $target=$(e.target);
    if($target.hasClass('nav-opened')){
      $("body").removeClass('nav-opened');
      // $("body").removeClass("scroll-down scroll-up").addClass("scroll-up");
    }
    //e.preventDefault();
  });

  // gnb event
  $gnbDepth1.on( {
    'mouseover'  : function(){
      $gnbDepth1.removeClass('is-active');
      $(this).addClass('is-active');
      if(!$body.hasClass('scroll-down')){
        $body.addClass('gnb-active');
      }
    }

  });

  $(".gnb-list").on({
    'mouseout' : function(){
    $gnbDepth1.removeClass('is-active');
    $body.removeClass('gnb-active');
    $(".gnb-list>li>a").blur();
   
  }
});

$gnbDepth1Link.on({
   'click' : function(e){
     return false;
     
   }
});

//패밀리사이트
$listFamily.css('display','none');

$btnFamily.on({
  'click' : function(){
    $iconFamily.removeClass('xi-angle-down-min xi-angle-up-min');
    if(flagFamily){
      flagFamily=false;
      $iconFamily.addClass('xi-angle-down-min');
    } else{
      flagFamily=true;
      $iconFamily.addClass('xi-angle-up-min');
    }
     $listFamily.stop().toggle();
     return false;
  }
})


// btn-tab
let $tabBtn=$('.btn-tab'),
$tabBtn_on=$('.btn-tab.on');

$tabBtn_on.css('cursor','default');

$tabBtn.on('click',function (e) {
  let targetURL=$(this).attr('href');
  $(this).blur();
  if(!$(this).hasClass('on')){
    $('html,body').stop().animate(
     {scrollTop: $(targetURL.substring(targetURL.lastIndexOf('#'))).offset().top-btnTab_gap}, 
     900, 'swing');
    }
   e.preventDefault();
});
 
  

addSticky(".header-bar");
stickyHeader.init();

  /*********************
   * 함수선언
   *********************/

function getBtnTab_gap() {
  winW=$win.width();
      if (winW >=560){
        btnTab_gap=120;
      }else {
        btnTab_gap=80;
      }
}

});// $(document).ready(function()

let  stickyHeader= (function(){
  let prevScrollTop = 0,
  currentScrollTop;

  function init(){
    headerbarHeight=$(".header-bar").outerHeight();
    $body = $('body');

      $(window).on('scroll', function(){
        currentScrollTop = $(this).scrollTop();
         
          if( headerbarHeight < currentScrollTop){
              $body.addClass('scroll-down');
          }else {
              $body.removeClass('scroll-down gnb-active') ;      
          }

          prevScrollTop = currentScrollTop;
      });
  }

  return {init: init}

  
})();


function addSticky(e){
  $(e).addClass("is-sticky");
}