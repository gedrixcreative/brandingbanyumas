<!DOCTYPE html>
<html lang="id">
	<?=$this->load->view('_head')?>
	<body>
	<!-- S:HEAD -->
	<?=$this->load->view('_header')?>
	<!-- E:HEAD -->
	<!-- S:ARTICLE -->
	<?=$this->load->view('usulan')?>
	<!-- E:ARTICLE -->
	<!-- S:FOOTER -->
	<?=$this->load->view('_footer')?>
	<script>
		$(document).ready(function(){
			$(".bx-detail").css("min-height",($(window).height() - 145))
		});

		$(window).resize(function(){
			$(".bx-detail").css("min-height",($(window).height() - 145))

		});
	</script>
	<!-- E:FOOTER -->
</body>
</html>