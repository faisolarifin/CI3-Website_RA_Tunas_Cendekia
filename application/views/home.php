<section class="big-content y-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="col">
						<div class="list_carousel wow fadeInUp">
							<ul id="foo3">
								<?php
									foreach ($slide_data as $row):
								?>
								<li>
									<img src="<?= base_url().'uploads/slider/'.$row->gambar; ?>" alt=".." class="img-fluid">
									<div class="carousel_text">
										<h6 class="font-weight-light"><?= $row->h_caption; ?></span></h6>
										<h4 class="font-weight-light"><?= $row->p_caption; ?></h4>
									</div>
								</li>
								<?php
									endforeach;
								?>
							</ul>
							<div class="clearfix"></div>

							<div id="timer2" class="timer"></div>
							<div class="corousel_button">
								<a id="prev3" class="prev" href="#"><i class="fa fa-caret-left"></i></a>
								<a id="next3" class="next" href="#"><i class="fa fa-caret-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center mt-4 card-list wow fadeInUp">
					<div class="col-10 col-sm-12">
						<div class="card-deck">
							<?php
								foreach($top_data as $row):
							?>
								<div class="card">
									<img src="<?= base_url().'uploads/posted/'.$row->gambar; ?>" alt=".." class="card-img-top">
									<div class="card-body">
										<div class="box-skew">
											<div class="card-heding">
												<h6 class="card-title font-weight-bold text-uppercase text-success"><?= $row->jenis_kategori; ?></h6>
												<small><?= $this->myclass->reverse_tanggal(substr($row->tgl_post, 0, 10)); ?></small>
											</div>
											<a href="<?= base_url().$row->jenis_kategori.'/posted/'.$row->uni_url; ?>"><p class="card-text mt-1"><?= $row->judul; ?></p></a>
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
			<div class="col-lg-4 wow fadeInUp">
				<div class="row">
					<div class="col">
						<a href="#"><img src="<?= base_url(); ?>assets/img/pdb.jpg" alt=".." class="img-fluid"></a>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col">
						<div class="heading-list">
							<h6 class="font-weight-bold">PENGUMUMAN TERBARU</h6>
						</div>
					</div>
				</div>
				<div class="row justify-content-center mb-4 mb-sm-0">
					<div class="col-11">
						<?php
							foreach ($notice_data as $row):
						?>
						<div class="row">
							<div class="col mt-3">
								<img src="<?= base_url(); ?>assets/img/Logo_RA_TC_Warna1.png" class="rounded float-left mr-2" alt=".." width="60" height="60">
								<div class="list_pengumuman">
									<h6 class="text-uppercase">Pengumuman <small><?= $row->tgl_post; ?></small></h6>
									<a href="<?= base_url().'pengumuman/preview/'.$row->file_upload; ?>"><p><?= strlen($row->hal) > 80 ? substr($row->hal, 0, 80).'...</p>' : $row->hal; ?></p></a>
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

<section id="vimi" class="vimi">
	<div class="container-fluid bg-batik py-4 mb-4 mb-sm-0">
		<div class="row judul-left">
			<div class="container">
				<div class="row">
					<div class="col">
						<h1>Visi & Misi</h1>
					</div>
				</div>
				<div class="row justify-content-center pt-3 vimi-list">
						<div class="col-lg-5 wow fadeInLeft">
							<ul>
								<?php
									foreach ($vimi_data as $row) {
										echo ($row->type=='visi') ? "<li>{$row->deskripsi}</li>" : '';
										}
									?>
							</ul>
						</div>
						<div class="col-lg-5 wow fadeInRight">
							<ul>
								<?php
									foreach ($vimi_data as $row) {
										echo ($row->type=='misi') ? "<li>{$row->deskripsi}</li>" : '';
									}
									?>
							</ul>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>
