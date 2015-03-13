<footer>
	&copy;<?=date('Y')?> City Branding Banyumas. Supported by <a target="_blank" href="http://lingkarmaya.com">Lingkar Maya</a>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?=$this->config->item('assets_url')?>js/bootstrap.min.js"></script>
<script src="<?=$this->config->item('assets_url')?>js/smooth-scroll.js"></script>
<script src="<?=$this->config->item('assets_url')?>js/wow.js"></script>
<script src="<?=$this->config->item('assets_url')?>js/media-social-script.js"></script>
<script>
	$(window).load(function(){
		new WOW().init();

		$('.page-one').css("min-height", $(window).height());
		$('.intro').css("min-height", $(window).height());
		$('.mission').css("min-height", $(window).height());
	});
</script>
<script>
	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});
</script>