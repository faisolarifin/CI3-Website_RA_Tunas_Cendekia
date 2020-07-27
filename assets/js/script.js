$('#foo3').carouFredSel({
	responsive: true,
	width: '100%',
	height: 'auto',
	prev: '#prev3',
	next: '#next3',
	auto: {
		pauseOnHover: 'resume',
		progress : '#timer2'
	}
}, {
	transition : true
});

$(function () {
	$('[data-toggle="tooltip"]').tooltip()
	
	$("img[alt='www.000webhost.com']").hide();
})
