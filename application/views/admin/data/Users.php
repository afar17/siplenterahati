<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('admin/Home'); ?>">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		
		<div class="col-md-6">

				<div class="panel panel-default">
					<?php $this->load->view("notif"); ?>
					<div class="panel-heading">
					<a href="<?php echo site_url("admin/Manajemen/add"); ?>"><button type='text' class='btn btn-default'><i class='fa fa-plus'></i> Tambah </button></a>
					Manajemen User</div>
					<div class="panel-body">
						<table class='table'>
							<thead>
								<th>No.</th>
								<th>Nama</th>
								<th>Username</th>
								<th>Level</th>
								<th></th>
							</thead>
							<tbody>
								<?php $no=1; foreach($user as $row) { ?>
									<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $row->nama_lengkap; ?></td>
									<td><?php echo $row->username; ?></td>
									<td><a href="<?php echo site_url("admin/Manajemen/delete/".$row->id_user); ?>" onclick="return confirm('Ingin Hapus ?')"><button type='button' class='btn btn-danger'>Hapus</button></a></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
		</div>
		