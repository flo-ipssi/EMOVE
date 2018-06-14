
// A $( document ).ready() block.
$( document ).ready(function() {
	$('.date input').datepicker({
		format: "dd/mm/yyyy",
	    startDate: "today",
	    todayBtn: "linked",
	    language: "fr",
	    orientation: "bottom auto",
	    autoclose: true,
	    todayHighlight: true,
	    toggleActive: true
	});
});

