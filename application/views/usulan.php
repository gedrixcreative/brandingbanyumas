<div class="container bx-detail" style="margin:120px auto 10px 0;">
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-12">
					<h1 itemprop="name">Kirim usulan logo dan tagline</h1>
					<hr/>
				</div>
			</div>
			<div class="row">
				<?php if(validation_errors() != ''): ?>
					<div class="alert alert-danger" role="alert">
						<?=validation_errors()?>
					</div>
				<?php endif; ?>
				<?php if($uploaded == '1'): ?>
					<div class="alert alert-danger" role="alert">
						File gagal diuplad.
					</div>
				<?php elseif($uploaded == '2'): ?>
					<div class="alert alert-success" role="alert">
						Terima kasih. Data dan berkas anda berhasil dikirim ke citybranding@banyumaskab.go.id.
					</div>
				<?php endif; ?>
				<div class="col-sm-6">
					<?php if($uploaded != '2'): ?>
					<form action="" role="form" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="email">Email</label>
							<input id="email" name="email" placeholder="Email" class="form-control" value="<?=set_value('email')?>"/>
						</div>
						<div class="form-group">
							<label for="nama">Nama</label>
							<input id="nama" name="nama" placeholder="Nama Lengkap" class="form-control" value="<?=set_value('nama')?>"/>
						</div>
						<div class="form-group">
							<label for="telepon">No. Telepon/HP</label>
							<input id="telepon" name="telepon" placeholder="No. Telepon/HP" class="form-control" value="<?=set_value('telepon')?>"/>
						</div>
						<div class="form-group">
							<label for="identitas">No. Identitas</label>
							<input id="identitas" name="identitas" placeholder="No. Identitas" class="form-control" value="<?=set_value('identitas')?>"/>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea id="alamat" name="alamat" placeholder="Alamat" class="form-control"><?=set_value('alamat')?></textarea>
						</div>
						<div class="form-group">
							<label for="berkas">Berkas (file *.zip,*.rar,*.tar.gz)</label>
							<input id="berkas" name="berkas" type="file" class="form-control" />
						</div>
						 <input id="submit" type="submit" value="Kirim" class="btn btn-default" name="submit" />
					</form>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			
		</div>
	</div>
</div>