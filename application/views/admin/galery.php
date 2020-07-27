

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">Galeri</h1>
					<p class="mb-4">Home &raquo; galeri.</p>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<a href="<?= base_url(); ?>admin/galeri/tambah"><button class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Tambah Foto</button></a>
						</div>
						<div class="card-body">
							<?= $this->session->flashdata('pesan'); ?>
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
									<tr>
										<th>No</th>
										<th>Gambar</th>
										<th>Deskripsi</th>
										<th>Aksi</th>
									</tr>
									</thead>
									<tbody>
									<?php
										$no=1;
										foreach ($galery_data as $row):
										?>
											<tr>
												<td><?= $no; ?></td>
												<td><img src="<?= base_url(); ?>uploads/galery/<?= $row->gambar; ?>" alt=".." width="200" height="150"></td>
											<td><?= $row->deskripsi; ?></td>
											<td>
												<a href="<?=  base_url(); ?>admin/galeri/hapus/<?= strtolower($row->id_galeri); ?>"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
												<a href="<?=  base_url(); ?>admin/galeri/ubah/<?= strtolower($row->id_galeri); ?>"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
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
