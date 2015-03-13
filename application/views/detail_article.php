<div class="container bx-detail" style="margin:120px auto 10px 0;">
	<div class="row">
		<div class="col-sm-9">
			<div class="content_detail" itemscope="articleBody" itemtype="http://schema.org/Article">
				<h1 itemprop="name"><?=$dataArticle->judul?></h1>
				<div class="author">
					<strong itemprop="author"><?=$dataArticle->penulis?></strong>, <span itemprop="sourceOrganization">City Branding Banyumas</span>
				</div>
				<div class="date" itemprop="datePublished"><?=$this->m_article->getDateWithDay($dataArticle->publish_date)?> WIB</div>
				<div class="clearfix mb5"></div>
				<div class="share-button-container">
					<div class="share-button" id="margin-top-5">
						<a class="twitter-share-button" href="https://twitter.com/share?text=<?=$dataArticle->judul?>: | #CityBrandingBanyumas&url=http:<?=base_url('read/'.$dataArticle->idartikel.'/'.$dataArticle->link)?>"> Tweet </a> <script type="text/javascript">window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));</script>
					</div>
					<div class="share-button">
						<a name="fb_share" type="button_count" expr:share_url="data:post.canonicalUrl" href="http://www.facebook.com/sharer.php?u=http:<?=base_url('read/'.$dataArticle->idartikel.'/'.$dataArticle->link)?>">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
					</div>
				</div>
				<div class="clearfix mb10"></div>
				
				<div class="checkOrientation pic_artikel ">
					<img src="http://statics.gedrix.net/uploads/<?=$dataArticle->cover_image?>" alt="<?=$dataArticle->judul?>" itemprop="image" width="100%" />
					<span><?=$dataArticle->caption_image?></span>
				</div>
				<div class="text_detail" id="detail" itemprop="description">
					<?=$dataArticle->isi?>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			
		</div>
	</div>
</div>