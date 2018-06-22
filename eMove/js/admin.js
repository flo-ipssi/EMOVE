
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
	
	$(".dashboard-carousel").slick({
	    infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1
	});
	$('.wrapper #content .card-footer i.fa-list-ul').click(function () {
	    var currentIndex = $(this).attr('data-slick-index');
	    console.log(currentIndex);
		$('.dashboard-carousel').slick('slickGoTo', currentIndex); 
	});
	

	$('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
    });
});

