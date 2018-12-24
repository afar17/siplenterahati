<!--main content start-->
<div class="main-top">
 <div class="main">
	<div class="section group">
		<div class="col span_2_of_3">
			<div class="contact-form">
		<h3>Form Pendaftaran <?php echo $judulform; ?></h3>
		
		<div class="panel-body">
			<?php $this->load->view('admin/notif'); ?>
		<div class="position-center">
		
		<?php if(isset($edit)){?>
			<form method="post" id="FormPendaftaran" role="form" action="<?php echo site_url("pendaftaran/update"); ?>">
		<?php } else { ?>
			<form method="post" id="FormPendaftaran"  action="<?php echo site_url("pendaftaran/save"); ?>">
		<?php } ?>
		
		<div class="form-group">
		
		<table class="bg-important table table-bordered">
        <tr>
			<td width="120">Nama Lengkap</td>
			<td><input type="text" class="form-control" name="nm_lengkap" placeholder="nama lengkap"></td>
		</tr>
        <tr>
			<td width="120">Nama Panggilan</td>
			<td><input type="text" class="form-control" name="nm_panggilan" placeholder="nama panggilan"></td>
		</tr>
		<?php if($sekolah !="TKIT"){ ?>
        <tr>

			<td width="120">NIK</td>
			<td><input type="text" class="form-control" name="nik" placeholder="nik"></td>
		</tr>
		<?php } ?>
        <tr>
			<td>Jenis Kelamin</td>
			<td>
				<div class="radio">
					<label><input type="radio"  name="jns_kelamin" value="laki-laki"> &nbsp;Laki-laki</label></div>
				<div class="radio">
					<label><input type="radio" name="jns_kelamin" value="perempuan"> &nbsp;Perempuan</label>
				</div>
			</td>
        </tr>
		<tr>
			<td width="120">Tempat Lahir</td>
			<td><input type="text" class="form-control" name="harga" placeholder="tempat"></td>
		</tr>
		<tr>
			<td width="120">Tanggal Lahir</td>
			<td><input type="text" id="tanggal" class="form-control" name="tanggallahir"></td>
		</tr>
		<tr>
			<td width="120">Agama Anak</td>
			<td>
				<select name="agamaanak" class="form-control">
					<option value="Islam">Islam</option>
					<option value="Katolik">Katolik</option>
					<option value="Protestan">Protestan</option>
					<option value="Hindu">Hindu</option>
					<option value="Budha">Budha</option>
					<option value="Konghucu">Konghucu</option>
					<option value="Lainnya">Lainnya</option>
				</select>
			</td>
		</tr>
		<tr>
			<td width="120">Alamat</td>
			<td><input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat"></td>
		</tr>
		<tr>
			<td width="120">Kewarganegaraan</td>
			<td>
            <div class="radio"><label><input type="radio"  name="kewarganegaraan" value="laki-laki"> &nbsp;Indonesia</label></div>
            <div class="radio"><label><input type="radio" name="kewarganegaraan" value="asing"> &nbsp;Asing</label></div>
			</td>
		</tr>
		<tr>
			<td width="120">Anak Ke</td>
			<td><input type="text" class="form-control" name="anak_ke" placeholder="anak ke"></td>
		</tr>
		<tr>
			<td width="120">Jumlah Saudara Kandung</td>
			<td><input type="text" class="form-control" name="jumlah_saudara_kandung" placeholder="jumlah saudara kandung"></td>
		</tr>
		<tr>
			<td width="120">Jumlah Saudara Angkat</td>
			<td><input type="text" class="form-control" name="jumlah_saudara_angkat" placeholder="jumlah saudara angkat"></td>
		</tr>
		<tr>
			<td width="120">Jumlah Saudara Tiri</td>
			<td><input type="text" class="form-control" name="jumlah_saudara_tiri" placeholder="jumlah saudara tiri"></td>
		</tr>
		<tr>
			<td width="120">Status Anak</td>
			<td>
            <div class="radio"><label><input type="radio"  name="status_anak" value="anak_kandung"> &nbsp;Anak Kandung</label></div>
            <div class="radio"><label><input type="radio" name="status_anak" value="anak_tiri"> &nbsp;Anak Tiri</label></div>
            <div class="radio"><label><input type="radio" name="status_anak" value="anak_angkat"> &nbsp;Anak Angkat</label></div>
			</td>
		</tr>
		<tr>
			<td width="120">Golongan Darah</td>
			<td>
            <div class="radio"><label><input type="radio"  name="goldarah" value="A"> &nbsp;A</label></div>
            <div class="radio"><label><input type="radio" name="goldarah" value="B"> &nbsp;B</label></div>
            <div class="radio"><label><input type="radio" name="goldarah" value="AB"> &nbsp;AB</label></div>
            <div class="radio"><label><input type="radio" name="goldarah" value="O"> &nbsp;O</label></div>
			</td>
		</tr>
    <tr><td width="120">Berat badan</td>
        <td><input type="text" class="form-control" name="berat_badan" placeholder="berat badan">
       </td></tr>
    <tr><td width="120">Imunisasi Yang Diterima</td>
        <td><input type="text" class="form-control" name="imunisasi_yg_diterima" placeholder="imunisasi yang diterima">
       </td></tr>
    <tr><td width="120">Jarak Rumah Ke Sekolah</td>
        <td><input type="text" class="form-control" name="jarak_rumah_kesekolah" placeholder="jarak rumahke sekolah">
       </td></tr>
    <tr><td width="120">Ukuran Baju</td>
        <td>
            <div class="radio"><label><input type="radio"  name="uk_baju" value="S"> &nbsp;S</label></div>
            <div class="radio"><label><input type="radio" name="uk_baju" value="M"> &nbsp;M</label></div>
            <div class="radio"><label><input type="radio" name="uk_baju" value="L"> &nbsp;L</label></div>
            <div class="radio"><label><input type="radio" name="uk_baju" value="XL"> &nbsp;XL</label></div>
            <div class="radio"><label><input type="radio" name="uk_baju" value="XXL"> &nbsp;XXL</label></div>
       </td></tr>

    <tr><td width="120">Nama Ayah</td>
        <td><input type="text" class="form-control" name="nama_ayah" placeholder="nama lengkap">
       </td></tr>
    <tr><td width="120"> Tempat</td>
        <td><input type="text" class="form-control" name="tempat_ayah" placeholder="tempat" />
       </td></tr>
    <tr><td width="120"> Tanggal Lahir Ayah</td>
        <td><input type="text" id="tanggallahirayah" class="form-control" name="tanggallahirayah" />
       </td></tr>
     <tr><td width="120">Agama Ayah</td>
        <td>
            <select name="agamaayah" class="form-control">
				<option value="Islam">Islam</option>
				<option value="Katolik">Katolik</option>
				<option value="Protestan">Protestan</option>
				<option value="Hindu">Hindu</option>
				<option value="Budha">Budha</option>
				<option value="Konghucu">Konghucu</option>
				<option value="Lainnya">Lainnya</option>
			</select>
       </td></tr>
    <tr><td width="120">Kewarganegaraan</td>
        <td>
           <div class="radio"><label><input type="radio"  name="kewarganegaraan_ayah" value="laki-laki"> &nbsp;Indonesia</label></div>
           <div class="radio"><label><input type="radio" name="kewarganegaraan_ayah" value="asing"> &nbsp;Asing</label></div>
       </td></tr>
    <tr><td width="120">Pendidikan Terakhir</td>
        <td>
            <div class="radio"><label><input type="radio"  name="pend_terakhir" value="sd"> &nbsp;SD</label></div>
            <div class="radio"><label><input type="radio"  name="pend_terakhir" value="smp"> &nbsp;SMP</label></div>
            <div class="radio"><label><input type="radio"  name="pend_terakhir" value="sma"> &nbsp;SMA</label></div>
            <div class="radio"><label><input type="radio"  name="pend_terakhir" value="sma"> &nbsp;Diploma</label></div>
            <div class="radio"><label><input type="radio"  name="pend_terakhir" value="diploma"> &nbsp;Sarjana</label></div>
            <div class="radio"><label><input type="radio"  name="pend_terakhir" value="lainnya"> &nbsp;lainnya</label></div>
       </td>
	</tr>
    <tr><td width="120">Pekerjaan</td>
        <td>
            <input type="text" class="form-control" name="pekerjaan_ayah" placeholder="pekerjaan">
       </td></tr>
    <tr><td width="120">No. KTP</td>
        <td><input type="text" class="form-control" name="no_ktp_ayah" placeholder="nomor ktp">
       </td></tr>
    <tr><td width="120">Penghasilan Perbulan</td>
        <td>
		<label><input type="radio" name="penghasilan_ayah" value="1"> < Rp.1.000.000,-(Kurang Dari Satujuta Rupiah)<br></label>
			<label><input type="radio" name="penghasilan_ayah" value="2"> 
			< Rp.5.000.000,- (Kurang Dari Limajuta Rupiah)<br>
			</label>
			<label><input type="radio" name="penghasilan_ibu" value="3"> > Rp.5.000.000,-
			(Lebih Dari Limajuta Rupiah)<br></label>
       </td>
	</tr>
    <tr><td width="120">Alamat</td>
        <td><input type="text" class="form-control" name="alamat_ayah" placeholder="alamat">
       </td></tr>
    <tr><td width="120">No. Telepon</td>
        <td><input type="text" class="form-control" name="no_tlpn_ayah" placeholder="nomor telepon">
       </td></tr>
    
    <tr><td width="120">Nama Ibu</td>
        <td><input type="text" class="form-control" name="nm_ibu" placeholder="Nama Ibu">
       </td></tr>
    <tr><td width="120">Tempat Lahir</td>
        <td><input type="text" class="form-control" name="tempat_ibu" placeholder="Tempat Lahir">
       </td></tr>
	<tr><td width="120">Tanggal Lahir Ibu</td>
        <td><input type="text" id="tanggallahiribu" class="form-control" name="tanggallahiribu" /></td>
	</tr>
    <tr><td width="120">Agama Ibu</td>
        <td><select name="agamaibu" class="form-control">
				<option value="Islam">Islam</option>
				<option value="Katolik">Katolik</option>
				<option value="Protestan">Protestan</option>
				<option value="Hindu">Hindu</option>
				<option value="Budha">Budha</option>
				<option value="Konghucu">Konghucu</option>
				<option value="Lainnya">Lainnya</option>
			</select>
       </td></tr>
    <tr><td width="120">Kewarganegaraan Ibu</td>
        <td>
		<div class="radio"><label><input type="radio"  name="kewarganegaraan_ibu" value="Indonesia"> &nbsp;Indonesia</label></div>
           <div class="radio"><label><input type="radio" name="kewarganegaraan_ibu" value="Asing"> &nbsp;Asing</label></div>
       </td>
	</tr>
    <tr><td width="120">Pendidikan Terakhir iBU</td>
       <td>
            <div class="radio"><label><input type="radio"  name="pend_terakhir_ibu" value="sd"> &nbsp;SD</label></div>
            <div class="radio"><label><input type="radio"  name="pend_terakhir_ibu" value="smp"> &nbsp;SMP</label></div>
            <div class="radio"><label><input type="radio"  name="pend_terakhir_ibu" value="sma"> &nbsp;SMA</label></div>
            <div class="radio"><label><input type="radio"  name="pend_terakhir_ibu" value="sma"> &nbsp;Diploma</label></div>
            <div class="radio"><label><input type="radio"  name="pend_terakhir_ibu" value="diploma"> &nbsp;Sarjana</label></div>
            <div class="radio"><label><input type="radio"  name="pend_terakhir_ibu" value="lainnya"> &nbsp;lainnya</label></div>
       </td>
	</tr>
    <tr><td width="120">Pekerjaan</td>
        <td><input type="text" class="form-control" name="pekerjaan_ibu" placeholder="pekerjaan">
       </td></tr>
    <tr><td width="120">No. KTP</td>
        <td><input type="text" class="form-control" name="pekerjaan_ibu" placeholder="nomor ktp">
       </td></tr>
    <tr><td width="120">Penghasilan Perbulan</td>
        <td>
			<label><input type="radio" name="penghasilan_ibu" value="1"> < Rp.1.000.000,-(Kurang Dari Satujuta Rupiah)<br></label>
			<label><input type="radio" name="penghasilan_ibu" value="2"> 
			< Rp.5.000.000,- (Kurang Dari Limajuta Rupiah)<br>
			</label>
			<label><input type="radio" name="penghasilan_ibu" value="3"> > Rp.5.000.000,-
			(Lebih Dari Limajuta Rupiah)<br></label>
			
        </td>
	</tr>
    <tr><td width="120">Alamat</td>
        <td><input type="text" class="form-control" name="alamat_ibu" placeholder="alamat">
       </td></tr>
    <tr><td width="120">No. Telepon Ibu</td>
        <td><input type="text" class="form-control" name="no_tlpn_ibu" placeholder="nomor telepon">
       </td></tr>
    </table>
    </div>
						
					   
								
	<?php 
	if(isset($edit)){
	?>
		<input type="hidden" name="id_daftar" value="<?php echo $row->id_daftar; ?>" />
		 <button type="submit" name="update" value="update" class="btn btn-info">Update</button>
	<?php } else { ?>
		 <input type="hidden" name="kodesekolah" value="<?php echo $sekolah; ?>" />
		 <button type="submit" name="save" value="save" class="btn btn-info">Save</button>
	<?php } ?>
                               
                            </form>
                            </div>

                        </div>
				  </div>
        </div>
	<!-- page end-->
	</div>
</section>
 


		
	   
    	
    	
            