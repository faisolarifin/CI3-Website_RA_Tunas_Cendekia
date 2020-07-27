

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">Slider</h1>
					<p class="mb-4">Home &raquo; slider &raquo; tambah</p>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<a href="<?= base_url(); ?>admin/slider"><span class="badge badge-primary"><i class="fas fa-angle-double-left"></i> Data Slider</span></a>
						</div>
						<div class="card-body">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4"><i class="fas fa-upload"></i> Unggah Slider</h1>
							</div>
							<?= $this->session->flashdata('pesan'); ?>
							<form class="user" method="post" action="<?= base_url(); ?>admin/slider/<?= @$slider_data ? 'ubah/'.strtolower($slider_data->id_slide) : 'tambah'; ?>" name="simpan" enctype="multipart/form-data">
								<div class="form-group">
									<!-- jika merupakan edit maka preview gambar -->
									<?= @$slider_data ? '<img src="'.base_url().'uploads/slider/'. $slider_data->gambar.'" alt="Gambar Data" width="200" height="150" class="rounded mb-3"><div class="w-100"></div>' : '' ?>
									<label for="gambar">Pilih Gambar (1920 x 1080px)</label>
									<input type="file" id="gambar" class="form-control" name="gambar">
								</div>
								<div class="form-group">
									<textarea name="h_caption" cols="30" rows="10" class="form-control" placeholder="Header Caption.. (max.50)"><?= @$slider_data->h_caption; ?></textarea>
								</div>
								<div class="form-group">
									<textarea name="p_caption" cols="30" rows="10" class="form-control" placeholder="Paragraph Caption.. (max.50)"><?= @$slider_data->p_caption; ?></textarea>
								</div>
								<input type="submit" class="btn btn-primary btn-user" value="<?= @$slider_data ? 'Ubah Sekarang' : 'Unggah Sekarang'; ?>" name="simpan">
								<hr>
						</div>
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->
