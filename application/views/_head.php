<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="City Branding Banyumas, kanal resmi sayembara cipta logo dan tagline Kab.Banyumas">
	<meta name="keywords" content="Branding Banyumas, City Branding, Sayembara Logo Banyumas, Banyumas, Purwokerto">
	<meta name="author" content="<?=isset($dataArticle->penulis)? $dataArticle->penulis : 'Lingkar Maya'?>">
	<meta name="generator" content="cms.gedrix.net">
	<meta content="article" property="og:type" />
	<meta content="City Branding Banyumas" property="og:site_name" />
	<meta content="<?=$pageTitle?>" property="og:title" />
	<meta content="<?='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>" property="og:url" />
	<meta content="1577459915827668" property="fb:app_id" />
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@citybrandingbms">
	<meta name="twitter:creator" content="@citybrandingbms">
	<meta name="twitter:title" content="<?=$pageTitle?>">
	<?php if($menu=='read'): ?>
	
	<meta name="twitter:description" content="<?=strip_tags($dataArticle->resume)?>">
	<meta name="twitter:image:src" content="http://statics.gedrix.net/uploads/<?=$dataArticle->cover_image?>">
	<meta property="og:image" content="http://statics.gedrix.net/uploads/<?=$dataArticle->cover_image?>"/>
	<meta content="<?=strip_tags($dataArticle->resume)?>" property="og:description" />
	<?php else: ?>
	
	<meta name="twitter:description" content="City Branding Banyumas, kanal resmi sayembara cipta logo dan tagline Kab.Banyumas">
	<meta name="twitter:image:src" content="http:<?=$this->config->item('assets_url')?>img/logo.png">
	<meta property="og:image" content="http:<?=$this->config->item('assets_url')?>img/logo.png"/>
	<meta content="Sayembara Cipta Logo dan Tagline" property="og:description" />
	<?php endif; ?>

	<link rel="shortcut icon" href="<?=$this->config->item('assets_url')?>img/favicon.png" type="image/x-icon">
	<title><?=$pageTitle?></title>
	<link href="<?=$this->config->item('assets_url')?>css/bootstrap.css" rel="stylesheet">
	<link href="<?=$this->config->item('assets_url')?>css/style.css" rel="stylesheet">
	<link href="<?=$this->config->item('assets_url')?>css/animate.css" rel="stylesheet">
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  
		ga('create', 'UA-59988387-1', 'auto');
		ga('send', 'pageview');
	  
	</script>
</head>