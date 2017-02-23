export default {
  init() {
    // JavaScript to be fired on all pages

    $('.nav-primary .menu-item-has-children').on('mouseenter', function() {
      $(this).find('ul.submenu').slideDown();
    }).on('mouseleave', function() {
      $(this).find('ul.submenu').slideUp();
    });

    $(window).on('scroll', function() {
      if ($('body').scrollTop() > 0) {
        $('header.banner').addClass('fixed');
      } else {
        $('header.banner').removeClass('fixed');
      }
    });

    $('.hamburger').on('click', function() {
      $(this).toggleClass('is-active');
      if ($(this).hasClass('is-active')) {
        $('nav.nav-primary').addClass('show');
      } else {
        $('nav.nav-primary').removeClass('show');
      }
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
