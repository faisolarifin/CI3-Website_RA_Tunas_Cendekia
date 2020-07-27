<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800 text-capitalize"><?= @$this->uri->segment(2); ?></h1>
	<p class="mb-4">Home &raquo; <?= @$this->uri->segment(2); ?>.</p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="<?= base_url(); ?>admin/<?= @$this->uri->segment(2); ?>/tambah"><button class="btn btn-primary text-capitalize"><i class="fas fa-pencil-alt"></i> Posting <?= @$this->uri->segment(2); ?></button></a>
		</div>
		<div class="card-body">
			<?= $this->session->flashdata('pesan'); ?>
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
					<tr>
						<th>No</th>
						<th>Gambar</th>
						<th>Judul</th>
						<th>Tgl Posting</th>
						<th>Isi Artikel</th>
						<th>Viewer</th>
						<th>Aksi</th>
					</tr>
					</thead>
					<tbody>
					<?php
						$no=1;
						foreach ($berita_data as $row):
						?>
						<tr>
							<td><?= $no; ?></td>
							<td><img src="<?= base_url(); ?>uploads/posted/<?= $row->gambar; ?>" alt="Gambar Berita" width="200" height="150"></td>
							<td><?= $row->judul; ?></td>
							<td><?= $row->tgl_post; ?></td>
							<td><?= strlen($row->isi_post ) > 200 ? substr($row->isi_post, 0, 200).'...' : $row->isi_post; ?></td>
							<td><?= $row->viewer; ?></td>
							<td>
								<a href="<?=  base_url(); ?>admin/<?= @$this->uri->segment(2); ?>/hapus/<?= strtolower($row->id_post); ?>"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
								<a href="<?=  base_url(); ?>admin/<?= @$this->uri->segment(2); ?>/ubah/<?= strtolower($row->id_post); ?>"><button class="btn btn-primary mt-2"><i class="fas fa-edit"></i></button></a>
							</td>
						</tr>
						<?php
						$no++;
						endforeach;
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
