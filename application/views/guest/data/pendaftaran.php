
<!--main content start-->
<div class="main-top">
	<div class="main">
	<div class="section group">
		<div class="col span_2_of_3">
			<h3><a href="<?php echo site_url('pendaftaran'); ?>"><i class="fa fa-list"></i> Penerimaan Siswa Baru (PSB)</a></h3>
			<?php 
			//ambil nilai batas dari controller
			$batas = $jumlahquota->kuota; 
			
			$jumlah_terdaftar = $this->bantuan->cekkuotatk();
			if($jumlah_terdaftar >= $batas) {
			?>
			<div class='alert alert-success'> 
			<button class="close" data-dismiss="alert">×</button>
			<h4 class='alert-heading'>PENDAFTARAN TK TUTUP !</h4>
			<span>
				<small>Maaf Pendaftaran TK Sudah Ditutup Karena Telah Mencapai Batas Quota</small>.
			</span>. 
			</div>
			<?php } ?>
			
			<a href="<?php if($jumlah_terdaftar <= $batas)  echo site_url('guest/pendaftaran/formdaftar/tkit'); else echo "#"; ?>">
			<button <?php if($jumlah_terdaftar >= $batas) echo "disabled  class='btn btn-default'"; else echo "class='btn btn-primary'" ?>><i class='fa fa-plus'></i> Daftar TKIT</button>
			</a>
				
			<a href="<?php echo site_url('guest/pendaftaran/formdaftar/sdit'); ?>">
			<button class='btn btn-primary'><i class='fa fa-plus'></i> Daftar SDIT</button>
			</a>
			   
			<a href="<?php echo site_url('guest/pendaftaran/formdaftar/smpit'); ?>">
			<button class='btn btn-primary'><i class='fa fa-plus'></i> Daftar SMPIT</button>
			</a>
			<br><br>
			<div class="col-md-8">
			<table class='table table-striped'>
				<thead>
					<tr>
						<th>Nomor</th>
						<th>Sekolah</th>
						<th vlign="center">Jumlah Pendaftar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td><a href="<?php echo site_url('guest/pendaftaran/lihattk'); ?>" target="_blank">TK IT</a></td>
						<td><center><?php echo $this->bantuan->cekkuotatk(); ?></center></td>
					</tr>
					<tr>
						<td>2</td>
						<td><a href="<?php echo site_url('guest/pendaftaran/lihatsd'); ?>" target="_blank">SD IT</a></td>
						<td><center><?php echo $this->bantuan->cekkuotasd(); ?></center></td>
					</tr>
					<tr>
						<td>3</td>
						<td><a href="<?php echo site_url('guest/pendaftaran/lihatsmp'); ?>" target="_blank">SMP IT</a></td>
						<td><center><?php echo $this->bantuan->cekkuotasmp(); ?></center></td>
					</tr>
				</tbody>
			</table>
			</div>
			<div class="col-md-8">

				<form method="post" action="<?php echo site_url("guest/Pendaftaran/cetakPendaftaran"); ?>">
				
				<input class='form-control' type="text" name="pendaftaran" value="" placeholder="Nomor Pendaftaran"><br>
				<input type="submit" class='btn btn-warning' name="save" value="Cetak Kartu Pendaftaran" />
				</form>
			</div>
			</div>
		</div>
		
<!-- page end-->
</div>
</section>
 

