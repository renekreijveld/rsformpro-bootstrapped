<script type="text/javascript">
$(document).ready(function() {
	var SWidth = $(window).width();
	if (SWidth < 766) {
		$("form#userForm").removeClass("form-horizontal");
	}
	if (SWidth >= 766) {
		$("form#userForm").addClass("form-horizontal");
	}
	$(window).resize(function() {
		var ScreenWidth = $(window).width();
		if (ScreenWidth < 766) {
			$("form#userForm").removeClass("form-horizontal");
		}
		if (ScreenWidth >= 766) {
			$("form#userForm").addClass("form-horizontal");
		}
	});
});
</script>
