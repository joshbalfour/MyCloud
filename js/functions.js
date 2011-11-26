$(document).ready(function() {
		
	if($('div.trigger').length > 0) {
		$('div.trigger').click(function() {
			if ($(this).hasClass('open')) {
				$(this).removeClass('open');
				$(this).addClass('close');
				$(this).next().slideDown(100);
				return false;
			} else {
				$(this).removeClass('close');
				$(this).addClass('open');
				$(this).next().slideUp(100);
				return false;
			}			
		});
	}
	
});