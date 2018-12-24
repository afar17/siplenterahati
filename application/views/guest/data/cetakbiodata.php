<div class="main-top">
 <div class="main">
	<div class="section group">
		<div class="col span_2_of_3">
		<button id="cetak" class="btn btn-info">
			<i class='fa fa-print'></i> Cetak
		</button>
		<div id="halaman-print">
			<table class='table'>
				<tr>
					<th border='1' colspan="3"><center><b>BIODATA DIRI</b></center></th>
					<th colspan="3"><center><b>BIODATA ORANGTUA</b></center></th>
				<tr>
				<tr><th>NIK</th><td>:</td><td><?php echo $peserta->nik_siswa; ?></td>
					<th>Nama Ayah</th><td>:</td><td><?php echo $peserta->nm_ayah; ?></td>
				</tr>
				<tr><th>Nama Lengkap</th><td>:</td><td><?php echo $peserta->nm_lengkap; ?></td>
					<th>Tempat, Tanggal Lahir Ayah</th><td>:</td><td><?php echo $peserta->tempat; ?> , <?php echo $peserta->tgl_lahir; ?></td>
					
				</tr>
				<tr><th>Nama Panggilan</th><td>:</td><td><?php echo $peserta->nm_panggilan; ?></td>
					<th>Agama Ayah</th><td>:</td><td></td>
				</tr>
				<tr><th>Jenis Kelamin</th><td>:</td><td>Laki-Laki</td>
					<th>Pendidikan Terakhir Ayah</th><td>:</td><td>Zainuddin</td>
					
				</tr>
				<tr><th>Tempat, Tanggal Lahir</th><td>:</td><td>Sorong, 17-8-1988</td>
					<th>Pekerjaan Ayah</th><td>:</td><td>Pekerjaan</td>
					
				</tr>
				<tr><th>Agama</th><td>:</td><td></td>
					<th>Gaji Ayah</th><td>:</td><td>Rp. 2.000.000,-</td>
				</tr>
				<tr><th>Alamat</th><td>:</td><td></td>
					
					<th>Nama Ibu</th><td>:</td><td>Siti</td>
				</tr>
				<tr><th>Golongan Darah</th><td>:</td><td></td>
					<th>Tempat, Tanggal Lahir</th><td>:</td><td>Zainuddin</td>
				</tr>
				<tr><th>Nomor Akta</th><td>:</td><td></td></tr>
				<tr><th colspan="6">
				<br><br><br>
				Tanggal Pendaftaran : <br>
				<u>Yayasan Lentera Hati</u>
				</th></tr>
			</table>
		</div><!--END HALAMAN PRINT -->
        </div>
	<!-- page end-->
	</div>
</section>

				