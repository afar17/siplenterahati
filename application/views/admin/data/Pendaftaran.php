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
				<h1 class="page-header">Pendaftaran</h1>
			</div>
		</div><!--/.row-->
		
		
		<div class="col-md-12">

				<div class="panel panel-default">
					<div class="panel-heading">Pendaftaran <?php echo $this->session->userdata("level"); ?>
						
					</div>
					<div class="panel-body">
						<?php $this->load->view("notif"); ?>
						<table class="table" id="hasilpendaftaran">
							<thead>
								 <tr>
                                    <th>No. Pendaftaran</th>
                                    <th>Nama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat Rumah</th>
	                                <th></th>
                                </tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
				</div>
		</div>