
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
	$('.naissance').datepicker({
	    format: "dd/mm/yyyy",
		language: "fr",
		todayHighlight: true,
	});
	$(".owl-carousel").owlCarousel({
		loop:true,
	    margin:10,
	    nav:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        800:{
	            items:2,
	            nav:false
	        },
	        1000:{
	            nav:true,
	            loop:false
	        }
	    }
	});

	$('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
    });
	
	
});

