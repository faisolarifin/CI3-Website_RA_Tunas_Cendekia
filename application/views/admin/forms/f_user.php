

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">Users</h1>
					<p class="mb-4">Home &raquo; users &raquo; tambah</p>


					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<a href="<?= base_url(); ?>admin/users"><span class="badge badge-primary"><i class="fas fa-angle-double-left"></i> Data Users</span></a>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-7">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4"><i class="fas fa-user-plus"></i> Tambah User</h1>
									</div>
									<form class="user" method="post" action="<?= base_url(); ?>admin/users/<?= @$user_data ? 'ubah/'.strtolower($user_data->id_user) : 'tambah'; ?>" name="simpan" enctype="multipart/form-data">
									<div class="form-group">
											<input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= @$user_data->nama; ?>">
										</div>
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Email" name="email" value="<?= @$user_data->email; ?>">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Username" name="username" value="<?= @$user_data->username; ?>">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Password" name="password" value="<?= @$user_data->password; ?>">
										</div>
										<input type="submit" class="btn btn-primary btn-user" value="<?= @$user_data ? 'Ubah' : 'Tambah'; ?>" name="simpan">
										<hr>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->
