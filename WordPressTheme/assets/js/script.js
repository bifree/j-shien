// ローディング判定
jQuery(function ($) {
jQuery(window).on("load", function() {
	jQuery("body").attr("data-loading", "true");
});

jQuery(function() {
	// スクロール判定
	jQuery(window).on("scroll", function() {
		if (100 < jQuery(this).scrollTop()) {
			jQuery("body").attr("data-scroll", "true");
		} else {
			jQuery("body").attr("data-scroll", "false");
		}
	});

	/* ドロワー */
	jQuery(".js-drawer").on("click", function(e) {
		e.preventDefault();
		let targetClass = jQuery(this).attr("data-target");
		jQuery("." + targetClass).toggleClass("is-checked");
		return false;
	});

	/* スムーススクロール */
	jQuery('a[href^="#"]').click(function() {
		let header = jQuery(".js-header").height();
		let speed = 300;
		let id = jQuery(this).attr("href");
		let target = jQuery("#" == id ? "html" : id);
		let position = jQuery(target).offset().top - header;
		if ("fixed" !== jQuery("#header").css("position")) {
			position = jQuery(target).offset().top;
		}
		if (0 > position) {
			position = 0;
		}
		jQuery("html, body").animate(
			{
				scrollTop: position
			},
			speed
		);
		return false;
	});

	/* 電話リンク */
	let ua = navigator.userAgent;
	if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
		jQuery('a[href^="tel:"]')
			.css("cursor", "default")
			.on("click", function(e) {
				e.preventDefault();
			});
	}
});
});

'use strict';

// ページトップボタン
$(function () {
  const topBtn = $(".page-top");
  topBtn.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });
  topBtn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      500
    );
    return false;
  });
});


// ハンバーガーメニュー
$(function() {
	$('.navbtn').click(function() {
		$(this).toggleClass('active');
  
		if ($(this).hasClass('active')) {
			$('.header_container__nav').addClass('active');
		} else {
			$('.header_container__nav').removeClass('active');
		}
	});
  });