$(document).ready(function(){
	$('nav li a').css('color','white');

	//change color of nav when scrolling to white bg-color
	$(window).scroll(function(){

	if ($("body").scrollTop()<520) {
				$('nav li a').css('color','white');
			}
			else{
				$('nav li a').css('color','#1b8dbe');
			}

		});

});