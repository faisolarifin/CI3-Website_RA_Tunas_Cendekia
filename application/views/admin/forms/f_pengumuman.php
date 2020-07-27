<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Pengumuman</h1>
	<p class="mb-4">Home &raquo; pengumuman &raquo; posting</p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="<?= base_url(); ?>admin/<?= @$this->uri->segment(2); ?>"><span class="badge badge-primary"><i class="fas fa-angle-double-left text-capitalize"></i> Data <?= @$this->uri->segment(2); ?></span></a>
		</div>
		<div class="card-body">
			<div class="text-center">
				<h1 class="h4 text-gray-900 mb-4 text-capitalize">Posting <?= @$this->uri->segment(2); ?></h1>
			</div>
			<?= $this->session->flashdata('pesan'); ?>
			<form class="user" method="post" action="<?= base_url(); ?>admin/<?= $this->uri->segment(2); ?>/<?= @$notice_data ? 'ubah/'.strtolower($notice_data->id_pengumuman) : 'tambah'; ?>" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Perihal" name="perihal" value="<?= @$notice_data->hal; ?>">
				</div>
				<div class="form-group">
					<textarea id="editor" name="isi"><?= @$notice_data->simple_info; ?></textarea>
				</div>
				<div class="form-group">
					<label for="gambar">File Upload</label>
					<input type="file" id="files" class="form-control" name="files">
				</div>
				<input type="submit" class="btn btn-primary btn-user" value="Posting" name="simpan">
				<hr>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
