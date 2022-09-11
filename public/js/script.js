$( document ).ready(function() {

  // AOS
  AOS.init({
    once: true,
    startEvent: 'DOMContentLoaded',
    offset: -5000
 })

  // Navbar Collapse
  $('#collapseButton').click(function() {
    if ($(this).hasClass('collapsed')) {
      $(this).html('Show Description')
    } else {
      $(this).html('Hide Description')
    }
  })

  // Toast
  $(".toast").toast({ delay: 10000 });
  $(".toast").toast({ autohide: true });

  setTimeout(() => {
    $('.toast').toast('show');
    $('#top').html(`<div class="toast-header">
                      <img src="img/formal1000.png" class="rounded-circle me-2 profile-picture" alt="Fikri Dean Radityo">
                      <strong class="me-auto">Fikri Dean Radityo</strong>
                      <small>One second ago</small>
                      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                      Thank you for logging in, please have a look at my website. You can change your profile on the dashboard page
                    </div>`)
  }, 3500);

  setTimeout(() => {
    $('#bottom').html(`<div class="toast-header">
                        <img src="img/formal1000.png" class="rounded-circle me-2 profile-picture" alt="Fikri Dean Radityo">
                        <strong class="me-auto">Fikri Dean Radityo</strong>
                        <small>One second ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                      <div class="toast-body">
                        If you are not comfortable with a bright background, please use dark mode to change the background color        </div>
                      </div>`)
  }, 6000);

  // Tooltips
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

  // About
  let aboutChecker = true;

  function aboutTimeout() {
    setTimeout(function () {
      if (aboutChecker) {
        $('.aboutChangingOne').css({
          'opacity': 0,
          'display': 'flex'
        });

        $('.aboutChangingTwo').css({
          'display': 'flex',
          'opacity': 1,
        });

        aboutChecker = false;
      } else {
        $('.aboutChangingOne').css({
          'display': 'flex',
          'opacity': 1
        });

        $('.aboutChangingTwo').css({
          'opacity': 0,
          'display': 'none'
        });

        aboutChecker = true;
      }
        
        aboutTimeout();
    }, 5000);
  }

  aboutTimeout();

});