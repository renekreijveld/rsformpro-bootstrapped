/* change layout RSForm from horizontal to vertical */

(function(jQuery){
	jQuery(document).ready(function() {
		var SWidth = jQuery(window).width();
		if (SWidth < 766) {
			jQuery("form#userForm").removeClass("form-horizontal");
			jQuery("form#userForm").addClass("form-vertical");
		}
		if (SWidth >= 766) {
			jQuery("form#userForm").removeClass("form-vertical");
			jQuery("form#userForm").addClass("form-horizontal");
		}
		jQuery(window).resize(function() {
			var ScreenWidth = jQuery(window).width();
			if (ScreenWidth < 766) {
				jQuery("form#userForm").removeClass("form-horizontal");
				jQuery("form#userForm").addClass("form-vertical");
			}
			if (ScreenWidth >= 766) {
				jQuery("form#userForm").removeClass("form-vertical");
				jQuery("form#userForm").addClass("form-horizontal");
			}
		});
	});
})(jQuery);
