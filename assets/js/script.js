$(document).ready(function(){
  let
    $body=$('body'),
    $win=$(window),
    $mBtn=$('.btn-side-menu'),
    $localMenuLists=$('.local-menu-list'),
    $localMenuLinks=$localMenuLists.find('a'),
    $gnbDepth1=$('.gnb-list >li'),
    $gnbDepth1_on,
    $gnbSubMenus=$('.gnb-list >li > a').next('ul'),
    $gnbDepth2,
    $submenu,
    gnbTimer,
    scrollTimer,
    LnbGap=100, //LNB is-current 지정되는 갭
    file_name=['about-yipscell','rnd','cell-line-service','analysis-service','news-room.html'],
    winW=$win.width();
    winH=$win.height();
  //addSticky(".header-bar");
  //addSticky(".btn-side-menu");
  //stickyHeader.init();
  selectedLnb();

   let gnb_index,
   lnb_index,
   page_id,
   page_url = window.location.href,
   page_path = window.location.pathname,
   page_file= page_path.substring(page_path.lastIndexOf("/"));
   if (page_url.includes('#')){
   page_id = page_url.substring(page_url.lastIndexOf("#"));
   }
   file_name.forEach(function(el,index) {
      if(page_file.includes(el)) {
        gnb_index=index;
      }
   });
   $gnbDepth1_on=$($gnbDepth1[gnb_index]);
   $gnbDepth1.removeClass('on');
   $gnbDepth1_on.addClass('on');
   $gnbDepth2=$gnbDepth1_on.find('ul a');
    
 

  
  /* 햄버거 메뉴 클릭 */
  $mBtn.click(function(){
    $body.toggleClass('nav-opened');
    //$gnbSubMenus.css('display','none');
    $gnbDepth1_on.find('ul').css('display','block');
   
    $localMenuLinks.each(function(index,el){
    if($(el).hasClass('is-current')){
      lnb_index=index;
   }
  });
   $gnbDepth2.removeClass('is-current');
   $($gnbDepth2[lnb_index]).addClass('is-current');
    //$("body").removeClass("scroll-down scroll-up").addClass("scroll-up");
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

  // gnb sub 
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

  // local manu click slide
  $localMenuLinks.on('click',function (e) {
    let target = this.hash;
    $(this).blur();
    $localMenuLinks.removeClass('is-current');
    $(this).addClass('is-current');
    scrollingTo(target);
    e.preventDefault();
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
  

  /*
  scroll ani
  */
  aniAddClass($('.l-wrap .container') , 'is-reveal');
  aniAddClass($('.headline') , 'is-reveal');
  aniAddClass($('.section-title') , 'is-reveal');
  aniAddClass($('.section-title+p') , 'is-reveal');
  aniAddClass($('.history-box') , 'is-reveal');
  aniAddClass($('fieldset') , 'is-reveal');
  const contAni = gsap.utils.toArray($(".is-reveal"));
  contAni.forEach((el) => {
    let contPlayTl = gsap.timeline();
    contPlayTl.fromTo(
      el,
      {
        y: 50,
        visibility: "hidden",
      },
      {
        y: 0,
        visibility: "visible",
        autoAlpha: 1,
        duration: 0.8,
      }
    ); //formTo
    ScrollTrigger.create({
      trigger: el,
      animation: contPlayTl,
      start: "top bottom-=100",
      end: "bottom top+=100",
      toggleActions: "play none none reset"
      //  markers:true
    }); //ScrollTrigger.create
  }); //forEach
  
  if (page_file.includes('about-yipscell')){
    scrollTriggerBatch('.recruit-list li');
  }
  
  if (page_file.includes('rnd')){
  scrollTriggerBatch('.rnd-intro li');
  scrollTriggerBatch('.doc-list li');
  scrollTriggerBatch('.thesis-box li');
  }

  if (page_file.includes('line')){
    gsap.set('.order-step li', {y:50});
    ScrollTrigger.batch('.order-step li', {
      interval: 0.1, // time window (in seconds) for batching to occur. 
      batchMax: 6,   // maximum batch size (targets). Can be function-based for dynamic values
      onEnter: batch => gsap.to(batch, {visibility: 'visible', y: 0, autoAlpha: 1, stagger: {each: 0.1, grid: [1, 6]}, overwrite: true}),
      onLeave: batch => gsap.set(batch, { y: 0, overwrite: true}),
      onEnterBack: batch => gsap.to(batch, {visibility: 'visible', y: 0, autoAlpha: 1, stagger: 0.1, overwrite: true}),
      onLeaveBack: batch => gsap.set(batch, {visibility: 'hidden', y: 50, overwrite: true}),
      start: "100px bottom",
      end: "top top"
      //  markers:true
    });
    ScrollTrigger.addEventListener("refreshInit", () => gsap.set('.order-step li', {y: 0}));
 }

 if (page_file.includes('analysis')){
  scrollTriggerBatch('[class*="gallery"] li');
 }

 if (page_file.includes('news')){
  scrollTriggerBatch('.news-box li');
 }

  /*********************
   * 함수선언
   *********************/
  /*scroll ani에 사용될  클래스 추가 */
   function aniAddClass(el,aname){
    el.each(function(){
      if((!$(this).is("[class*='no-add']")) && !($(this).hasClass(aname))){
      $(this).addClass(aname);
      }
     });//each
   }//function aniAddClass


  /*Scroll ani */   
  function scrollingTo(id){
    $('html,body').stop().animate(
      {scrollTop: $(id).offset().top},
      900,
      'swing'
    )
  }

  /*스크롤시 Lnb is-current 클래스 지정 */
  function selectedLnb() { 
    let subTarget= [],
    subTargetTop= [],
    $selected='';

      $localMenuLinks.each(function(index,item){
      subTarget[index]=item.hash;
      // console.log(index,item)
      subTargetTop[index]=$(subTarget[index]).offset().top-$(window).scrollTop();
      if(subTargetTop[index] < LnbGap) {$selected=subTarget[index]; }
    });
    // window.location.hash = $selected;
    $localMenuLinks.removeClass('is-current');
    $localMenuLists.find('a[href="' + $selected + '"]').addClass('is-current');
      
  }


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
