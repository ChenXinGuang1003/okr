// 移动端字体大小
(function(b, a) {
	function c() {
		d = 100 * Math.min(e.getBoundingClientRect().width, a.maxWidth) / a.desinWidth;
		e.style.fontSize = d + "px"
	}
	var e = b.document.documentElement,
		d = 100,
		f;
	a.desinWidth = 750;
	a.maxWidth = 750;
	a.init = function() {
		b.addEventListener("resize", function() {
			clearTimeout(f);
			f = setTimeout(c, 300)
		}, !1);
		c()
	}
})(window, window.adaptive || (window.adaptive = {}));
adaptive.init();