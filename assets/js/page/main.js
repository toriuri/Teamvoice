$(document).ready(function () {
  
  let sloganAni = gsap.timeline({
    repeat: -1
  });
  
  sloganAni
    .from(".slide1 h2", {opacity: 0, duration: 1, y: 50})
    .from(".slide1 p", {opacity: 0, duration: 1, y: 50})
    .to(".slide1", {opacity: 0, duration: 4})
    
    .from(".slide2 h2", {opacity: 0, duration: 1, y: 50 })
    .from(".slide2 p", {opacity: 0, duration: 1, y: 50 })
    .to(".slide2", {opacity: 0, duration: 4})
  
    .from(".slide3 h2", {opacity: 0, duration: 1, y: 50 })
    .from(".slide3 p", {opacity: 0, duration: 1, y: 50 })
    .to(".slide3", {opacity: 0, duration: 5})
});


