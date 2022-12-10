const arrows = {
	leftArrow: '<i class="la la-angle-left"></i>',
	rightArrow: '<i class="la la-angle-right"></i>',
};

$(".date-picker").datepicker({
	format: "yyyy-mm-dd",
	todayHighlight: true,
	orientation: "bottom left",
	autoclose: true,
	templates: arrows,
});
