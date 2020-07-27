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
						<th>Perihal</th>
						<th>Simple Info</th>
						<th>Tanggal Posting</th>
						<th>File Uploads</th>
						<th>Viewer</th>
						<th>Downloads</th>
						<th>Aksi</th>
					</tr>
					</thead>
					<tbody>
					<?php
						$no=1;
						foreach ($notice_data as $row):
						?>
						<tr>
							<td><?= $no; ?></td>
							<td><?= $row->hal; ?></td>
							<td><?= strlen($row->simple_info ) > 200 ? substr($row->simple_info, 0, 200).'...' : $row->simple_info; ?></td>
							<td><?= $row->tgl_post; ?></td>
							<td><?= $row->file_upload; ?></td>
							<td><?= $row->viewer; ?></td>
							<td><?= $row->count_download; ?></td>
							<td>
								<a href="<?=  base_url(); ?>admin/<?= @$this->uri->segment(2); ?>/hapus/<?= strtolower($row->id_pengumuman); ?>"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
								<a href="<?=  base_url(); ?>admin/<?= @$this->uri->segment(2); ?>/ubah/<?= strtolower($row->id_pengumuman); ?>"><button class="btn btn-primary mt-2"><i class="fas fa-edit"></i></button></a>
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
