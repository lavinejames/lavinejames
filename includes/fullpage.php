<!-- fullpage.js -->

<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.fullPage.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#fullpage').fullpage({
			anchors:['1', '2', '3', '4', '5', '6', '7', '8'],
			sectionsColor: ['#ffffff', '#212126', '#370A57', '#FF6400', '#00BE46', '#FF3366', '#1E3246', '#212126'],
			navigation: true,
			navigationPosition: 'left',
			responsiveWidth: 800,
			
			'afterLoad': function(index){
				if(index == 1){
					setTimeout(function(){
						$('#section1').find('.intro').addClass('active');
					}, 500);
				}
				if(index == 2){
					$('.column:nth-of-type(1)').addClass('active');
				}
				if(index == 2){
					setTimeout(function(){
						$('.column:nth-of-type(2)').addClass('active');
					}, 100);
				}
				if(index == 2){
					setTimeout(function(){
						$('.column:nth-of-type(3)').addClass('active');
					}, 200);
				}
				if(index == 2){
					setTimeout(function(){
						$('.full-width').addClass('active');
					}, 600);
				}
				if(index == 8){
					$('.first').addClass('active');
				}
				if(index == 8){
					setTimeout(function(){
						$('.second').addClass('active');
					}, 200);
				}
				if(index == 8){
					setTimeout(function(){
						$('.third').addClass('active');
					}, 300);
				}
				if(index == 8){
					setTimeout(function(){
						$('.fourth').addClass('active');
					}, 400);
				}
				if(index == 8){
					setTimeout(function(){
						$('.fifth').addClass('active');
					}, 600);
				}
				if(index == 3){
					$('#section3').find('.text').addClass('active');
				}
				if(index == 4){
					$('#section4').find('.text').addClass('active');
				}
				if(index == 5){
					$('#section5').find('.text').addClass('active');
				}
				if(index == 6){
					$('#section6').find('.text').addClass('active');
				}
				if(index == 7){
					$('#section7').find('.text').addClass('active');
				}
			},
			
			'onLeave': function(nextIndex){
				if(nextIndex != ''){
					$('.text').removeClass('active');
				}
				if(nextIndex != ''){
					$('.intro').removeClass('active');
				}
				if(nextIndex != ''){
					$('.column').removeClass('active');
				}
				if(nextIndex != ''){
					$('.full-width').removeClass('active');
				}
			},
		});
	});
</script>

<!-- End fullpage.js -->