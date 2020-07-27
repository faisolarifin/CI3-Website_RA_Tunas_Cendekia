<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Profile</h1>
	<p class="mb-4">Home &raquo; profile.</p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data Profile</h6>
		</div>
		<div class="card-body">
			<?= $this->session->flashdata('pesan'); ?>
			<form class="user" method="post" action="<?= base_url(); ?>admin/profile" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Judul Profile" name="judul" value="<?= @$profile_data->judul; ?>">
				</div>
				<div class="form-group">
					<textarea id="editor" name="isi"><?= @$profile_data->isi_post; ?></textarea>
				</div>
				<div class="form-group">
					<!-- jika merupakan edit maka preview gambar -->
					<?= @$profile_data ? '<img src="'.base_url().'uploads/posted/'.$profile_data->gambar.'" alt="Gambar Data" width="200" height="150" class="rounded mb-3"><div class="w-100"></div>' : '' ?>

					<label for="gambar">Gambar Profile</label>
					<input type="file" id="gambar" class="form-control" name="gambar">
				</div>
				<input type="submit" class="btn btn-primary btn-user" value="Ubah Profile" name="simpan">

				<hr>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
