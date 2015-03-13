<div class="navbar navbar-fixed-top box-menu" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				 <span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?=base_url()?>" id="logo-teks-header">City Branding Banyumas</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?=base_url()?>" <?php if($menu=='home'){ echo 'id="menu-select"';} ?>>DEPAN</a></li>
				<li><a href="<?=base_url('article')?>" <?php if($menu=='article'){ echo 'id="menu-select"';} ?>>ARTIKEL</a></li>             
				<li><a href="<?=base_url('read/10/kerangka-acuan')?>">KERANGKA ACUAN</a></li>
				<li><a href="<?=base_url('read/11/aturan-sayembara')?>">ATURAN SAYEMBARA</a></li>
			</ul>
		</div>
	</div>
</div>