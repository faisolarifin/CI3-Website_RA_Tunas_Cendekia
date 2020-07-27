<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Berita</h1>
	<p class="mb-4">Home &raquo; berita &raquo; posting</p>

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
			<form class="user" method="post" action="<?= base_url(); ?>admin/<?= $this->uri->segment(2); ?>/<?= @$berita_data ? 'ubah/'.strtolower($berita_data->id_post) : 'tambah'; ?>" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Judul <?= @$this->uri->segment(2); ?>" name="judul" value="<?= @$berita_data->judul; ?>">
				</div>
				<div class="form-group">
					<select class="custom-select" name="kategori">
						<option value="">Pilih tipe postingan...</option>
						<?php
							foreach ($kategori_data as $row):
						?>
							<option value="<?= $row->id_kategori; ?>" <?= (@$berita_data->id_kategori==$row->id_kategori || @$this->uri->segment(2)==$row->jenis_kategori) ? 'selected' : $row->id_kategori; ?>><?= $row->jenis_kategori ?></option>
						<?php
							endforeach;
						?>
					</select>
				</div>
				<div class="form-group">
					<textarea id="editor" name="isi"><?= @$berita_data->isi_post; ?></textarea>
				</div>
				<div class="form-group">
					<!-- jika merupakan edit maka preview gambar -->
					<?= @$berita_data ? '<img src="'.base_url().'uploads/posted/'.$berita_data->gambar.'" alt="Gambar Data" width="200" height="150" class="rounded mb-3"><div class="w-100"></div>' : '' ?>

					<label for="gambar">Gambar Berita</label>
					<input type="file" id="gambar" class="form-control" name="gambar">
				</div>
				<input type="submit" class="btn btn-primary btn-user" value="Posting" name="simpan">
				<hr>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
