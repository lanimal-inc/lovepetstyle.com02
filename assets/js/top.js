/* ==========================================================================
   【ページ内リンクのスムーズスクロール】
=========================================================================== */
$(document).ready(function(){
	var rate = 5;
	var minspeed = 200;

	$('a[href^="#"]:not([data-toggle="collapse"])').click(function() {
		var hash = this.hash;
		if (!hash || hash == "#") return false;

		if (!$(hash).length) return false;

		var speed = Math.abs($(window).scrollTop() - $(hash).offset().top) / rate + minspeed;

		$('html,body').animate(
			{ scrollTop: $(hash).offset().top - 100 },
			speed,
			"easeOutCirc"
		);
		return false;
	});
});

/* ==========================================================================
   【ページ外特定IDリンクのスクロール】
=========================================================================== */
$(window).on('load', function() {
	var url = $(location).attr('href');
	setTimeout(function(){
		if(url.indexOf("?id=") != -1){
			var id = url.split("?id=");
			var $target = $('#' + id[id.length - 1]);
			if($target.length){
				var pos = $target.offset().top;
				$("html, body").animate({scrollTop:pos}, 1500);
			}
		}
	}, 100);
});

/* ==========================================================================
   【ページトップへ戻るボタンとスムーズスクロール】
=========================================================================== */
;(function (d, $) {

	var $pagetop = isMobile() ? $('.pagetop') :
	(function(){
		return $('.pagetop').removeClass('pagetop').addClass('pagetop3');
	})(),
	pagetop_offset = 50;

	$pagetop.on('click', function(e){
		e.preventDefault();
		var href = $(this).find('a').attr('href');
		if (!href || !$(href).length) return false;

		var _dest = $(href).offset().top;
		$('html, body').animate({
			scrollTop: _dest
		}, 1200, 'easeInOutQuart');
	});

	if (!isMobile()) {
		$(window).on('scroll', function () {
			if ($(this).scrollTop() > pagetop_offset) {
				$pagetop.css('visibility','visible').addClass('visible');
			} else {
				$pagetop.removeClass('visible');
			}
		});
	}

	function isMobile(){
		return typeof window.orientation != "undefined";
	}

})(document, jQuery);

/* ==========================================================================
   【郵便番号自動入力 + バリデーション】
=========================================================================== */
(function($){
	$(function() {
		if ($.fn.zip2addr && $('#zip').length) {
			$('#zip').zip2addr({
				pref:'#pref',
				addr:'#addr'
			});
		}

		if ($.validator && $.validator.setDefaults) {
			$.validator.setDefaults({
				highlight: function(element) {
					$(element).closest('.form-group').addClass('has-error');
				},
				unhighlight: function(element) {
					$(element).closest('.form-group').removeClass('has-error');
				},
				errorElement: 'span',
				errorClass: 'help-block',
				errorPlacement: function(error, element) {
					if(element.parent('.controls').length) {
						error.insertAfter(element.parent());
					} else {
						error.insertAfter(element);
					}
				}
			});
		}

		if ($.fn.validate && $('#form').length) {
			$('#form').validate({
				rules: {
					last_name: "required",
					first_name: "required",
					email: {
						required: true,
						email: true
					},
					content: {
						maxlength: 1000
					}
				},
				messages: {
					last_name: "姓を入力してください。",
					first_name: "名を入力してください。",
					email: {
						required: "メールアドレスを入力してください。",
						email: "メールアドレスを正しく入力してください。"
					},
					content: {
						maxlength: jQuery.format("お問合せ内容は {0} 文字 以内で入力してください。")
					}
				}
			});
		}
	});
})(jQuery);

/* ==========================================================================
   【遅延読み込み / infinite scroll】
=========================================================================== */
;(function (d, $) {

	var jQdm_slideMenu;

	jQdm_slideMenu = function(){

		var prop = {
			deferredImage: 'img.deferred',
			subContainer: '#subContainer',
			mainNavigation_trigger: '.mainNavigation_trigger',
			mainNavigation_appear: '.appeared',
			pagerContainer: '.navigation',
			pagerTargetContainer: '#out_box',
			pagerLoadingContents: '#out_box .inner_box'
		};

		function init(){

			deferredImage_setting();

			$(prop.mainNavigation_trigger).find('a').on('click', function(){
				$(prop.subContainer).toggleClass(replaceString(prop.mainNavigation_appear));
			});

			if ($.fn.infinitescroll && $(prop.pagerTargetContainer).length) {
				$(prop.pagerTargetContainer).infinitescroll({
					itemSelector: prop.pagerLoadingContents,
					animate: false,
					extraScrollPx: 300,
					pixelsFromNavToBottom: 50,
					loading: {
						img: "img/loader.gif",
						msgText: "画像を読み込んでいます...",
						finishedMsg: "すべて読み込まれました"
					}
				}, function(_t, _opt){
					var _len = _t.length;
					while(_len--){
						deferredImage_setting($(_t[_len]).find(prop.deferredImage));
					}
				});
			}
		}

		function deferredImage_setting(_$t){
			if ($.fn.lazyload) {
				$(_$t || prop.deferredImage).lazyload({
					threshold: 10,
					effect: 'fadeIn',
					effectspeed: 1000
				});
			}
		}

		function replaceString(_str, _bf, _af, _flg){
			var _reg = new RegExp(_bf || '[\\.#]', _flg || '');
			return _str ? _str.replace(_reg, _af || '') : false;
		}

		init();
	};

	jQdm_slideMenu();

})(document, jQuery);

/* ==========================================================================
   【footer current】
=========================================================================== */
jQuery(function ($) {
	var currentPath = window.location.pathname.replace(/\/$/, '') || '/';

	$('footer a').each(function () {
		var linkPath = this.pathname.replace(/\/$/, '') || '/';

		if (currentPath === linkPath) {
			$(this).addClass('current');
			$(this).closest('td').addClass('current');
		}
	});
});