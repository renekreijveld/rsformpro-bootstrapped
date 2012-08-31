/* change layout RSForm from horizontal to vertical */

(function($){
	$(document).ready(function() {
		var SWidth = $(window).width();
		if (SWidth < 766) {
			$("form#userForm").removeClass("form-horizontal");
			$("form#userForm").addClass("form-vertical");
		}
		if (SWidth >= 766) {
			$("form#userForm").removeClass("form-vertical");
			$("form#userForm").addClass("form-horizontal");
		}
		$(window).resize(function() {
			var ScreenWidth = $(window).width();
			if (ScreenWidth < 766) {
				$("form#userForm").removeClass("form-horizontal");
				$("form#userForm").addClass("form-vertical");
			}
			if (ScreenWidth >= 766) {
				$("form#userForm").removeClass("form-vertical");
				$("form#userForm").addClass("form-horizontal");
			}
		});
	});
})(jQuery);