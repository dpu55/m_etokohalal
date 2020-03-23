// Default favorite button by DPU
$(function () {
	$('.click').click(function() {
		if ($('.click a span').hasClass("fa-heart")) {
				$('.click').removeClass('active')
			setTimeout(function() {
				$('.click').removeClass('active-2')
			}, 30)
				$('.click').removeClass('active-3')
			setTimeout(function() {
				$('.click a span').removeClass('fa-heart')
				$('.click a span').addClass('fa-heart-o')
			}, 15)
		} else {
			$('.click').addClass('active')
			$('.click').addClass('active-2')
			setTimeout(function() {
				$('.click a span').addClass('fa-heart')
				$('.click a span').removeClass('fa-heart-o')
			}, 150)
			setTimeout(function() {
				$('.click').addClass('active-3')
			}, 150)
			$('.info').addClass('info-tog')
			setTimeout(function(){
				$('.info').removeClass('info-tog')
			},1000)
		}
	})
	});