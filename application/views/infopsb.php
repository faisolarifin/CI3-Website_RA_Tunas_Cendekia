<section class="big-content y-content">
	<div class="container">
		<div class="row mb-2">
			<div class="col">
				<span class="badge badge-success"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i> Informasi Pendaftaran Siswa Baru</span>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 mb-4 wow fadeInUp">
				<div class="row">
					<div class="col">
						<p>Pendaftaran akan di buka pada:
							tanggal : 17 Agustus 2020.</p>

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
