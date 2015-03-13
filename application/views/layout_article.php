<!DOCTYPE html>
<html lang="id">
	<?=$this->load->view('_head')?>
	<body>
	<!-- S:HEAD -->
	<?=$this->load->view('_header')?>
	<!-- E:HEAD -->
	<!-- S:ARTICLE -->
	<?=$this->load->view('article')?>
	<!-- E:ARTICLE -->
	<!-- S:FOOTER -->
		<?=$this->load->view('_footer')?>
	<!-- E:FOOTER -->
	<script>
		$(document).ready(function(){
			$(".bx-news-gal").css("min-height",($(window).height() - 145))
		});

		$(window).resize(function(){
			$(".bx-news-gal").css("min-height",($(window).height() - 145))

		});
	</script>
</body>
</html>