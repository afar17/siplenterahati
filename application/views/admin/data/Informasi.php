<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('admin/Home'); ?>">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Komentar Masuk</h1>
			</div>
		</div><!--/.row-->
		<div class="col-md-12">
		<div class="panel panel-default">
			  <a href="<?php echo site_url('admin/Info/add'); ?>">
			   <button class='btn btn-info' type='button'><i class='fa fa-plus'></i> Tambah</button>
			   </a>
                     <table class="table" ui-jq="footable">
					<thead>
					  <tr>
						<th data-breakpoints="xs">Nomor</th>
                        <th>Id Info</th>
                        <th>Waktu</th>
                        <th>Id User</th>
                        <th>Kode Sekolah</th>
                        <th>Judul Info</th>
                        <th>Isi</th>
                                                        
						<th></th>
					  </tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($informasi as $row) { ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row->id_info; ?></td>
							<td><?php echo $row->tgl_terbit; ?></td>
                                                                <td><?php echo $row->id_user; ?></td>
                                                                <td><?php echo $row->sekolah_kodesekolah; ?></td>
                                                                <td><?php echo $row->jdl_berita; ?></td>
							<td><?php echo $row->isi_berita; ?></td>
							<td><a href="<?php echo site_url("admin/Info/edit/".$row->id_info); ?>" >
								<button type = "button" class = "btn btn-info"><i class='fa fa-edit'></i> Edit</button>
								</a>
								|
								<a href="<?php echo site_url("admin/Info/del/".$row->id_info); ?>" onclick="return confirm('Ingin Menghapusnya ?')">
								<button type = "button" class = "btn btn-danger"><i class='fa fa-times'></i> Delete</button>
								</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
					</table>

                </div>
               
