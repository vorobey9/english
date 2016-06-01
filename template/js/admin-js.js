
$(document).ready(function(){

 var nav = $('.nav-block');
 var pos = nav.offset().top;
 var leftblock =$('.left-nav-section .inside-block');
 $(window).scroll(function () {
  var fix = ($(this).scrollTop() > pos) ? true : false;
  nav.toggleClass("navbar-fixed-top", fix);
  leftblock.toggleClass('left-fixed-block',fix);

 });

/*Script for navigation*/
 var leftNav = $('.left-nav-section .inside-block .navbar-block .nav>li');
leftNav.on('click',function(){
 $('a i',this).toggleClass('fa-minus');
 $('.dropdown-menu ',this).slideToggle();
});
 /*Script for navigation*/


 /*Test-statistic from front-side to back-side*/
 $('.test-statistic .front-side #test-btn').on('click',function(){
  $('.test-statistic .front-side').slideToggle();
  $(".test-statistic .back-side").slideToggle();
 });

 $('.test-statistic .back-side #back').on('click',function(){
  $('.test-statistic .front-side').slideToggle();
  $(".test-statistic .back-side").slideToggle();
 });


 /*Test-statistic from front-side to back-side*/


//Scrollbar for left panel

 $('.left-nav-section').mCustomScrollbar({
  theme:"minimal"
 });
 //Scrollbar for left panel

});