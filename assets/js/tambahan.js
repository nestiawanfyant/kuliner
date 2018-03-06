$(document).ready(function(){
  $('.tabs').tabs({
    // swipeable : true,
    // responsiveThreshold : 10000,
  });
  $('.parallax').parallax();
  $('.materialboxed').materialbox();
  $('.fixed-action-btn').floatingActionButton();
  $('.tooltipped').tooltip();
  $('.slider').slider();
  $('.sidenav').sidenav();
  $('.tap-target').featureDiscovery('open');
  $('.dropdown-trigger').dropdown();
  $('.modal').modal();
  $('select').select();
  CKEDITOR.replace( 'editor1' );
  M.updateTextFields();
});


// Typed Effect
var typed = new Typed('#typed', {
  strings: [
    ' Koding ...',
    ' ',
    'HTML ...',
    ' ',
    'CSS ...',
    ' ',
    'Javascript ...',
    ' ',
    'PHP ...',
    ' ',
    'Tentang ...',
    ' ',
    'Web Programming ...',
  ],
  typeSpeed: 50,
  backSpeed: 70,
  backDelay: 1200,
  startDelay: 1000,
  loop: true,
});
