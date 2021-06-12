$(document).ready(function(){
  let
    $body=$('body'),
    $win=$(window),
    $mBtn=$('.btn-side-menu'),
    $fullMenu_d1=$('.gnb-list-box'),
    $fullMenuLinks=$fullMenu_d1.find('a'),
    $gnbDepth1=$('.gnb-list >li'),
    $gnbDepth1_on,
    $gnbSubMenus=$('.gnb-list >li > a').next('ul'),
    $gnbDepth2=$gnbDepth1.find('li>a'),
    $gnbDepth2_on,
    gnbTimer,
    scrollTimer,
    LnbGap=100, //LNB is-current 지정되는 갭
    d1_name=['product','guide','customer'],
    winW=$win.width();
    winH=$win.height();

  //d1,d2 현재 메뉴 표시
  //$gnbDepth1 .on 추가
  //$gnbDepth2 .is-current 추가
  //$fullMenuLinks  .is-current 추가
   let gnb_index,
   menu_index,
   page_id,
   page_url = window.location.href,
   page_path = window.location.pathname,
   page_hash = window.location.hash,
   page_file= page_path.substring(page_path.lastIndexOf("/"));
   if (page_url.includes('#') && page_hash.length>1){
   page_id = page_url.substring(page_url.lastIndexOf("#"));
   }

   d1_name.forEach(function(el,index) {
      if(page_path.includes(el)) {
        gnb_index=index;
      }
   });

   $gnbDepth1_on=$($gnbDepth1[gnb_index]);
   $gnbDepth1.removeClass('on');
   $gnbDepth1_on.addClass('on');
   
   $gnbDepth2.each(function(index,el){
    if($(el).prop('href').includes(page_file)) {
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
    // 'mouseover' : function(){
    //   if(!$body.hasClass(scroll-down)){
    //     $body.addClass('gnb-active');
    //   }
    // },
    'mouseout' : function(){
    $gnbDepth1.removeClass('is-active');
    $body.removeClass('gnb-active');
    $(".gnb-list>li>a").blur();
   
  }
});

$(".gnb-list>li>a").on({
  'click' : function(){
    return false;
  }
}) 
    
  

  $gnbSubMenus.find('a').on('click', function(e){
     let targetURL=$(this).attr('href');
     if ( targetURL.includes(page_file)) {
       $("body").removeClass('nav-opened');
       $('html,body').stop().animate(
        {scrollTop: $(targetURL.substring(targetURL.lastIndexOf('#'))).offset().top}, 
        900, 'swing');
      }
  });

 
  $win.scroll(function() {
    selectedLnb();
  });
  
  $(window).resize(function(){
    winW=$win.width();
    selectedLnb();
  });

  
  // Background Star Ani
  let bgAni = gsap.timeline({repeat: -1});
  bgAni
    .from(".site-bg .star", {opacity: 0, duration: 2})
    .from(".site-bg .star", {opacity: 1, duration: 2})
  

 

  /*********************
   * 함수선언
   *********************/
    function  scrollTriggerBatch(el){
  gsap.set(el, {y:50});
  ScrollTrigger.batch(el, {
    interval: 0.1, // time window (in seconds) for batching to occur. 
    batchMax: 3,   // maximum batch size (targets). Can be function-based for dynamic values
    onEnter: batch => gsap.to(batch, {visibility: 'visible', y: 0, autoAlpha: 1, stagger: {each: 0.15, grid: [1, 3]}, overwrite: true}),
    onLeave: batch => gsap.set(batch, { y: 0, overwrite: true}),
    onEnterBack: batch => gsap.to(batch, {visibility: 'visible', y: 0, autoAlpha: 1, stagger: 0.15, overwrite: true}),
    onLeaveBack: batch => gsap.set(batch, {visibility: 'hidden', y: 50, overwrite: true}),
    start: "100px bottom",
    end: "top top"
    //  markers:true
  });
  ScrollTrigger.addEventListener("refreshInit", () => gsap.set(el, {y: 0}));
}

addSticky(".header-bar");
stickyHeader.init();


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
              // console.log('down');
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
