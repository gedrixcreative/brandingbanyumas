<!-- S:BOX NEWS GALERRY -->
<div class="bx-news-gal">
	<ul class="list-gal">
		<?php foreach($dataArticle->result() as $row): ?>
			<li>
				<img src="http://statics.gedrix.net/uploads/<?=$row->cover_image?>?w=460" width="400"/>
				<div class="gal-date"><?=$this->m_article->getDateWithDay($row->publish_date)?> WIB</div>
				<h1><a href="<?=base_url('read/'.$row->idartikel.'/'.$row->link)?>"><?=$row->judul?></a></h1>
				<div class="gal-desc"><?=strip_tags($row->resume)?></div>
				<div class="clearfix"></div>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
<!-- E:BOX NEWS GALLERY -->