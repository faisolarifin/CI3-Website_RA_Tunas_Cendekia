<section id="galery" class="galery y-content">
	<div class="container">
		<div class="row mb-2 justify-content-center">
			<div class="col-10">
				<span class="badge badge-success"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i> Galeri</span>
			</div>
		</div>
		<div class="row justify-content-center mt-4">
			<div class="col-10">
				<div class="card-columns">
					<?php
					 foreach ($galeri_data as $row):
					?>
						<div class="card shadow wow fadeInUp">
							<a data-fancybox="gallery" href="<?= base_url().'uploads/galery/'.$row->gambar; ?>" data-caption="<?= $row->deskripsi; ?>" title="click untuk memperbesar">
								<img src="<?= base_url().'uploads/galery/'.$row->gambar; ?>" alt=".." class="img-fluid">
								<div class="spark"><h5 class="mt-3 ml-3"><?= $row->deskripsi; ?></h5></div>
							</a>
						</div>
					<?php
						endforeach;
					?>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="recomended">
	<div class="container">
		<div class="row justify-content-center mt-4">
			<div class="col-lg-10">
				<div class="row">
					<div class="col">
						<div class="heading-list">
							<h6 class="font-weight-bold">SERING DIKUNJUNGI</h6>
						</div>
					</div>
				</div>
				<?php
					foreach ($top_data as $row):
				?>
				<div class="row mt-3 wow fadeInLeft">
					<div class="col">
						<img src="<?= base_url().'uploads/posted/'.$row->gambar; ?>" alt=".." width="200" height="130" class="float-left mr-3">
						<a href="<?= base_url().$row->jenis_kategori.'/posted/'.$row->uni_url; ?>"><h4><?= $row->judul; ?></h4></a>
						<span class="badge badge-success text-uppercase"><?= $row->jenis_kategori; ?></span><small> <?= $row->tgl_post; ?></small>
						<?= strlen($row->isi_post) > 150 ? substr($row->isi_post, 0, 150).'...</p>' : $row->isi_post; ?>
					</div>
				</div>
				<?php
					endforeach;
				?>
			</div>
		</div>
	</div>
</section>
