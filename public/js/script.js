$( document ).ready(function() {
  AOS.init({
    once: true,
    startEvent: 'DOMContentLoaded',
    offset: -1000
 })

  $('#collapseButton').click(function() {
    if ($(this).hasClass('collapsed')) {
      $(this).html('Show Description')
    } else {
      $(this).html('Hide Description')
    }
  })
});