

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">Galery</h1>
					<p class="mb-4">Home &raquo; galery &raquo; posting</p>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<a href="<?= base_url(); ?>admin/galeri"><span class="badge badge-primary"><i class="fas fa-angle-double-left"></i> Data Foto</span></a>
						</div>
						<div class="card-body">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4"><i class="fas fa-upload"></i> Unggah Foto</h1>
							</div>
							<?= $this->session->flashdata('pesan'); ?>
							<form class="user" method="post" action="<?= base_url(); ?>admin/galeri/<?= @$galery_data ? 'ubah/'.strtolower($galery_data->id_galeri) : 'tambah'; ?>" name="simpan" enctype="multipart/form-data">
								<div class="form-group">
									<!-- jika merupakan edit maka preview gambar -->
									<?= @$galery_data ? '<img src="'.base_url().'uploads/galery/'.$galery_data->gambar.'" alt="Gambar Data" width="200" height="150" class="rounded mb-3"><div class="w-100"></div>' : '' ?>

									<label for="gambar"Pilih Gambar</label>
									<input type="file" id="gambar" class="form-control" name="gambar">
								</div>
								<div class="form-group">
									<textarea name="deskripsi" class="form-control" cols="30" rows="10" placeholder="Deskripsi.. (max.100)"><?= @$galery_data->deskripsi; ?></textarea>
								</div>
								<input type="submit" class="btn btn-primary btn-user" value="Unggah Sekerang" name="simpan">
								<hr>
						</div>
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->
