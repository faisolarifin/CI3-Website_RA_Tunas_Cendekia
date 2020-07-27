<section class="big-content y-content">
	<div class="container">
		<div class="row mb-2">
			<div class="col">
				<span class="badge badge-success"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i> Berita</span>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 mb-4">
				<div class="row">
					<div class="col">
						<?php
							foreach ($posting_data as $row):
						?>
						<div class="row mb-4 wow fadeInUp">
							<div class="col-11">
								<img src="<?= base_url().'uploads/posted/'.$row->gambar; ?>" alt=".." class="img-fluid rounded">
								<h4 class="font-weight-bold mt-2"><?= $row->judul; ?></h4>
								<small>
									<span class="badge badge-primary text-capitalize"><i class="fa fa-certificate"></i> <?= $row->jenis_kategori; ?></span>
									<span class="badge badge-primary text-capitalize"><i class="fa fa-user"></i> <?= $row->nama; ?></span>
								</small>
								<p><?= strlen($row->isi_post) > 350 ? substr($row->isi_post, 0, 350).'...' : $row->isi_post; ?></p>
								<a href="<?= base_url().'berita/posted/'.$row->uni_url; ?>"><button class="btn btn-primary btn-more">LEBIH LENGKAP</button></a>
							</div>
							<div class="col-1 p-0 right-date">
								<div class="date text-center p-2">
									<?php
										$data = explode('-', substr($row->tgl_post, 0, 10));
										echo "<span class='d-block'> {$data[2]} </span> {$data[1]}-{$data[0]}";
									?>
								</div>
							</div>
						</div>
						<?php
							endforeach;
						?>
					</div>
				</div>

			</div>
			<div class="col-lg-4">
				<div class="row">
					<div class="col"><!--memang sengaja dikosongkan--></div>
				</div>
				<div class="row">
					<div class="col">
						<div class="heading-list">
							<h6 class="font-weight-bold">PALING POPULER</h6>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-11 py-3">
						<?php
							foreach ($top_data as $row):
						?>
							<div class="row">
								<div class="col">
									<img src="<?= base_url().'uploads/posted/'.$row->gambar; ?>" class="rounded float-left mr-2" alt=".." width="60" height="60">
									<div class="list_pengumuman">
										<small><?= $row->tgl_post; ?></small>
										<a href="<?= base_url().$row->jenis_kategori.'/posted/'.$row->uni_url; ?>">
											<h6><?= strlen($row->judul) > 50 ? substr($row->judul, 0, 50).'...' : $row->judul; ?></h6>
											<?= strlen($row->isi_post) > 80 ? substr($row->isi_post, 0, 80).'...</p>' : $row->isi_post; ?>
										</a>
									</div>
								</div>
							</div>
						<?php
							endforeach;
						?>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<div class="heading-list">
							<h6 class="font-weight-bold">BERITA LAINYA</h6>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-11 py-3">
						<?php
						foreach ($berita_data as $row):
							?>
							<div class="row">
								<div class="col">
									<img src="<?= base_url().'uploads/posted/'.$row->gambar; ?>" class="rounded float-left mr-2" alt=".." width="60" height="60">
									<div class="list_pengumuman">
										<small><?= $row->tgl_post; ?></small>
										<a href="<?= base_url().$row->jenis_kategori.'/posted/'.$row->uni_url; ?>">
											<h6><?= strlen($row->judul) > 50 ? substr($row->judul, 0, 50).'...' : $row->judul; ?></h6>
											<?= strlen($row->isi_post) > 80 ? substr($row->isi_post, 0, 80).'...</p>' : $row->isi_post; ?>
										</a>
									</div>
								</div>
							</div>
						<?php
						endforeach;
						?>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<div class="heading-list">
							<h6 class="font-weight-bold">ARTIKEL PILIHAN</h6>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-11 py-3">
						<?php
						foreach ($artikel_data as $row):
							?>
							<div class="row">
								<div class="col">
									<img src="<?= base_url().'uploads/posted/'.$row->gambar; ?>" class="rounded float-left mr-2" alt=".." width="60" height="60">
									<div class="list_pengumuman">
										<small><?= $row->tgl_post; ?></small>
										<a href="<?= base_url().$row->jenis_kategori.'/posted/'.$row->uni_url; ?>">
											<h6><?= strlen($row->judul) > 50 ? substr($row->judul, 0, 50).'...' : $row->judul; ?></h6>
											<?= strlen($row->isi_post) > 80 ? substr($row->isi_post, 0, 80).'...</p>' : $row->isi_post; ?>
										</a>
									</div>
								</div>
							</div>
						<?php
						endforeach;
						?>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
