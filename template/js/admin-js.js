$.fn.liftOff = function(){
 var div=$(".preloader");
 $.when(
     $(".logo-container").animate({bottom: '35%'}).promise()
 ).done(function(){
  $(".loader-container").animate({bottom: '15%'}).promise
 })

 div.delay(3000).animate({bottom:'100%'}, 400);
};
$(document).ready(function(){
 $('body').liftOff();
 $('.navbar-toggle').on('click',function(){
  $('#main-nav').toggleClass('open');
 });

 $(window).scroll(function () {
  if ($(this).scrollTop() > 400) {
   $('.up').fadeIn();
  } else {
   $('.up').fadeOut();
  }

 });
$(window).resize(function(){

 if($(this).width()  < '780'){
  $('#smallBtn').fadeIn();
  $('.left-nav-section').addClass('tablet');

 }else{
  $('#smallBtn').fadeOut();
  $('.left-nav-section').removeClass('tablet');
 }

});


 $('#smallBtn').on('click',function(){
  $('.left-nav-section').toggleClass('tablet');
  });



 var nav = $('.nav-block');
 var pos = nav.offset().top;
 var leftblock =$('.left-nav-section .inside-block');
 $(window).scroll(function () {
  var fix = ($(this).scrollTop() > pos) ? true : false;
  nav.toggleClass("navbar-fixed-top", fix);
  leftblock.toggleClass('left-fixed-block',fix);
 });

 $('.up').on('click',function(){
  $('html,body').animate({
   scrollTop: 0
  },1000);
  return false;
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
 $('.test-statistic .front-side #test-btn2').on('click',function(){
  $('.test-statistic .front-side').slideToggle();
  $(".test-statistic .back-side").slideToggle();
 });
 $('.test-statistic .back-side #back').on('click',function(){
  $('.test-statistic .front-side').slideToggle();
  $(".test-statistic .back-side").slideToggle();
 });
 $('.test-statistic .back-side #back2').on('click',function(){
  $('.test-statistic .front-side').slideToggle();
  $(".test-statistic .back-side").slideToggle();
 });


 /*Test-statistic from front-side to back-side*/

 /*News table news-admin page*/


 $('.admin-table tr .correct-item',this).on('click',function() {
  $('#change-news').modal('toggle');
 });
 /*News table news-admin page*/

 //Event of the add-facult button

 $('#add-facult').on('click',function(){
  $('.add-facultative-block').slideToggle('middle')
 });


 //Event of the add-facult button





//Scrollbar for left panel

 $('.left-nav-section').mCustomScrollbar({
  theme:"minimal"
 });
 $('.news-panel .comments-block').mCustomScrollbar({
  theme:"minimal-dark"
 });

 //Scrollbar for left panel




$('#next-step').on('click',function(){
 $('.answer-block').slideToggle();
});



 /*Manipulation with admin panel Andrey*/

 $('#add-facult-btn').on('click',function(){
  var title = $('#title-facultative').val();
  $('#alert-ok').show().delay(700).slideUp(500);
  var html = '<tr><th>1</th><td>'+ title+'</td> <th> <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>20.06.16</span></th> <th> <span class="correct-item"> <i class="fa fa-pencil" aria-hidden="true"></i> </span> </th> <th> <span class="delete-item"><i class="fa fa-times" aria-hidden="true"></i></span> </th> </tr> </tr>';
$(".news-table tbody").prepend(html);

 });

 $('#accept').on('click',function(){
  var title = $('#theme-title').val();
  $('#alert-ok').show();
  var html = '<tr><th>1</th><td>'+ title+'</td>  <th> <span class="correct-item"> <i class="fa fa-pencil" aria-hidden="true"></i> </span> </th> <th> <span class="delete-item"><i class="fa fa-times" aria-hidden="true"></i></span> </th> </tr> </tr>';
  $(".news-table tbody").prepend(html);

 });

 $('.admin-table tbody .delete-item').on('click',function(){
  $(this).closest("tr").hide('middle');
 });

 $('#accept').on('click',function(){
  $('#alert-ok').show().delay(700).slideUp(500);
 });
 $('#denumer').on('click',function(){
  $(this).toggleClass('active');
 });
 $('#numer').on('click',function(){
  $(this).toggleClass('active');
 });
 $('.test',this).on('click',function(){
  $(this).toggleClass('active');
 });
 $('.pagination li a',this).on('click',function(){
  $(this).closest('li').toggleClass('active');
 });
 /*Manipulation with admin panel Andrey*/














});
'use strict';

;( function( $, window, document, undefined )
{
 $( '.inputfile' ).each( function()
 {
  var $input	 = $( this ),
      $label	 = $input.next( 'label' ),
      labelVal = $label.html();

  $input.on( 'change', function( e )
  {
   var fileName = '';

   if( this.files && this.files.length > 1 )
    fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
   else if( e.target.value )
    fileName = e.target.value.split( '\\' ).pop();

   if( fileName ){
    $label.find( 'span' ).html( fileName );
    console.log(fileName);}
   else
    $label.html( labelVal );

  });

  // Firefox bug fix
  $input
      .on( 'focus', function(){ $input.addClass( 'has-focus' ); })
      .on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
 });
})( jQuery, window, document );