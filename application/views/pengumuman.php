<section class="big-content y-content">
	<div class="container">
		<div class="row mb-2">
			<div class="col">
				<span class="badge badge-success"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i> Pengumuman</span>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 mb-4">
				<div class="row pl-4">
					<div class="col">
						<?php
							foreach ($notice_data as $row):
						?>
						<div class="row mb-5 card-custom  wow fadeInUp">
							<div class="col-12">
								<div class="card pr-5">
									<div class="card-body">
										<div class="date text-center p-1">
											<?php
											$data = explode('-', substr($row->tgl_post, 0, 10));
											echo "<span class='d-block'> {$data[2]} </span> {$data[1]}-{$data[0]}";
											?>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<img src="<?= base_url(); ?>assets/img/Logo_RA_TC_Warna1.png" alt=".." class="img-fluid">
												<div class="social-share text-center mt-2">
														<a href="https://wa.me/?text=<?= current_url().'/preview/'.$row->file_upload; ?>" class="badge btn-whatsapp" data-toggle="tooltip" data-placement="bottom" title="Share di Whatsapp"><i class="fa fa-whatsapp"></i></a>
														<a href="https://www.facebook.com/sharer/sharer.php?u=<?= current_url().'/preview/'.$row->file_upload; ?>" class="badge btn-facebook" data-toggle="tooltip" data-placement="bottom" title="Share di Facebook"><i class="fa fa-facebook"></i></a>
														<a href="https://twitter.com/intent/tweet?text=<?= $row->hal; ?>&amp;url=<?= current_url().'/preview/'.$row->file_upload; ?>" class="badge btn-twitter" data-toggle="tooltip" data-placement="bottom" title="Share di Twitter"><i class="fa fa-twitter"></i></a>
														<a href="https://plus.google.com/share?url=<?= current_url().'/preview/'.$row->file_upload; ?>" class="badge btn-google-plus"  data-toggle="tooltip" data-placement="bottom" title="Share di Google+"><i class="fa fa-google-plus"></i></a>
												</div>
											</div>
											<div class="col-lg-8">
												<a href="<?= base_url().'pengumuman/preview/'.$row->file_upload; ?>">
													<h5 class="card-title"><?= $row->hal; ?></h5>
													<?= strlen($row->simple_info) > 250 ? substr($row->simple_info, 0, 250).'...</p>' : $row->simple_info; ?>
												</a>
												<a href="<?= base_url().'pengumuman/downloads/'.$row->file_upload; ?>"><span class="btn btn-success"><i class="fa fa-download"></i> Unduh</span></a>
											</div>
										</div>
									</div>
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
