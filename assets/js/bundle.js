"use strict";

/* eslint-disable no-undef */
var resizeCover = function resizeCover() {
  var homeCover = document.getElementById('homecover-1');
  var newHeight = document.documentElement.clientHeight - document.getElementById('navbar-1').clientHeight;
  homeCover.style.height = newHeight + 'px';
  homeCover.style.minHeight = newHeight + 'px';
};

document.addEventListener('DOMContentLoaded', resizeCover);
window.addEventListener('resize', resizeCover);
"use strict";

/* eslint-disable no-unused-vars */
AOS.init();

(function ($) {
  // Burger Nav
  $('#burger-nav').click(function () {
    $('#burger-nav').toggleClass('open');
    $('.mobile-nav').toggleClass('open');
    $('.burger-overlay').toggleClass('show');
  });
  $('.collapse-bar').click(function () {
    $('.shape-involved').toggleClass('open');
    $('.collapse-bar').toggleClass('close');
  }); // Banner

  $('#close-banner').click(function () {
    $('#banner').hide();
  }); // Progress Bar

  var progressWrap = document.getElementById('progress-wrap');

  if (progressWrap) {
    var replaceComma = function replaceComma(num) {
      return num.replace(/,/g, '');
    };

    var percentage = replaceComma($('#current-count').html()) / replaceComma($('#goal').html()) * 100;
    $($('#progress')).css('width', percentage + '%');
  }
  /* Burger nav */


  $('.burger, .burger-overlay').click(function () {
    $('.#burger-nav').toggleClass('clicked');
    $('.mobile-nav').toggleClass('show');
    $('body').toggleClass('overflow');
  }); // Image hover
  // $( '.hover' ).mouseleave(
  // 	function() {
  // 		$( this ).removeClass( 'hover' );
  // 	}
  // );
})(jQuery);
"use strict";

var buttons = document.querySelectorAll('[id^="tab-button-"]');
var targetDivs = document.querySelectorAll('[id^="tab-description-"]');
buttons.forEach(function (btn, index) {
  btn.onclick = function () {
    var isTargetVisible = 'block' === targetDivs[index].style.display; // Toggle the display of the clicked targetDiv if it's not currently visible

    if (!isTargetVisible) {
      targetDivs.forEach(function (div, idx) {
        div.style.display = idx === index ? 'block' : 'none';
      });
      buttons.forEach(function (button, btnIndex) {
        // Add 'active-element' class to the clicked button and remove from others
        if (btnIndex === index) {
          button.classList.add('active-element');
        } else {
          button.classList.remove('active-element');
        }
      });
    }
  };
});