
<!--main content start-->
<div class="main-top">
				<div class="main">
			    <div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3><a href="<?php echo site_url('pendaftaran'); ?>"><i class="fa fa-list"></i> </a>Penerimaan Siswa Baru (PSB)</h3>
					    <form>
			
                <section class="panel">
                    
					
					 <div class="panel-body">
					 
                             <table class="table" ui-jq="footable" ui-options='{
								"paging": {
								  "enabled": true
								},
								"filtering": {
								  "enabled": true
								},
								"sorting": {
								  "enabled": true
								}}'>
							<thead>
							  <tr>
                    <tr><th>Nama Lengkap</th></tr>
                    <tr><th>Nama Panggilan</th></tr>
                    <tr><th>NIK</th></tr>
                    <tr><th>Jenis Kelamin</th></tr>
                    <tr><th>Tempat</th></tr>
                    <tr><th>Tanggal Lahir</th></tr>
                    <tr><th>Agama</th></tr>
                    <tr><th>Alamat</th></tr>
                    <tr><th>Kewarganegaraan</th></tr>
                    <tr><th>Anak Ke</th></tr>
                    <tr><th>Jumlah Saudara Kandung</th></tr>
                    <tr><th>Jumlah_saudara_angkat</th></tr>
                    <tr><th>Jumlah Saudara Tiri</th></tr>
                    <tr><th>Status Anak</th></tr>
                    <tr><th>Gol Darah</th></tr>  
                    <tr><th>Berat Badan</th></tr>
                    <tr><th>Imunisasi Yang Diterima</th></tr>
                    <tr><th>Jarak Rumah Ke Sekolah</th></tr>
                    <tr><th>Ukuran Baju</th></tr>
                    <tr><th>Nama Ayah</th></tr>
                    <tr><th>Tempat Lahirr</th></tr>
                    <tr><th>TTL</th></tr>
                    <tr><th>Agama</th></tr> 
                    <tr><th>Kewarganegaraan</th></tr>
                    <tr><th>Pendidikan Terakhir</th></tr>
                    <tr><th>Pekerjaan</th></tr>
                    <tr><th>No KTP</th></tr>
                    <tr><th>Penghasilan Perbulan</th></tr>
                    <tr><th>Alamat Ayah</th></tr>
                    <tr><th>No Telepon</th></tr>
                    <tr><th>Nama Ibu</th></tr>
                    <tr><th>Tempat Lahir</th></tr>
                    <tr><th>TTL</th></tr>
                    <tr><th>Agama</th></tr>
                    <tr><th>Kewarganegaraan</th></tr>
                    <tr><th>Pendidikan Terakhir</th></tr>
                    <tr><th>Pekerjaan</th></tr>
                    <tr><th>No KTP</th></tr>
                    <tr><th>Penghasilan Perbulan</th></tr>
                    <tr><th>Alamat</th></tr>
                    <tr><th>No Telepon</th></tr>
							  </tr>
							</thead>
							<tbody>
								<?php $no=1; foreach($pendaftaran as $row) { ?>
								<tr>
                    <tr><?php echo $row->nama_lengkap; ?></tr>
                    <tr><?php echo $row->nama_panggilan; ?></tr>
                    <tr><?php echo $row->nikv; ?></tr>
                    <tr><?php echo $row->jns_kelamin; ?></tr>
                    <tr><?php echo $row->tempat; ?></tr>
                    <tr><?php echo $row->tgl_lahir; ?></tr>
                    <tr><?php echo $row->tgl_lahir; ?></tr>
                    <tr><?php echo $row->agama; ?></tr>
                    <tr><?php echo $row->alamat; ?></tr>
                    <tr><?php echo $row->kewarganegaraan; ?></tr>
                    <tr><?php echo $row->anak_ke; ?></tr>
                    <tr><?php echo $row->jumlah_saudara_kandung; ?></tr>
                    <tr><?php echo $row->jumlah_saudara_angkat; ?></tr>
                    <tr><?php echo $row->jumlah_saudara_tiri; ?></tr>
                    <tr><?php echo $row->status_anak; ?></tr>
                    <tr><?php echo $row->gol_darah; ?></tr>  
                    <tr><?php echo $row->berat_badan; ?></tr>
                    <tr><?php echo $row->imunisasi_yg_diterima; ?></tr>
                    <tr><?php echo $row->jarak_rumah_kesekolah; ?></tr>
                    <tr><?php echo $row->uk_baju; ?></tr>
                    <tr><?php echo $row->nm_ayah; ?></tr>
                    <tr><?php echo $row->tempat_ayah; ?></tr>
                    <tr><?php echo $row->tgl_lahir_ayah; ?></tr>
                    <tr><?php echo $row->agama_ayah; ?></tr> 
                    <tr><?php echo $row->kewarganegaraan_ayah; ?></tr>
                    <tr><?php echo $row->pendidikan_terakhir_ayah; ?></tr>
                    <tr><?php echo $row->pekerjaan_ayah; ?></tr>
                    <tr><?php echo $row->no_ktp_ayah; ?></tr>
                    <tr><?php echo $row->penghasilan_perbulan_ayah; ?></tr>
                    <tr><?php echo $row->alamat_ayah; ?></tr>
                    <tr><?php echo $row->no_tlpn_ayah; ?></tr>
                    <tr><?php echo $row->nm_ibu; ?></tr>
                    <tr><?php echo $row->tempat_ibu; ?></tr>
                    <tr><?php echo $row->tgl_lahir_ibu; ?></tr>
                    <tr><?php echo $row->agama_ibu; ?></tr>
                    <tr><?php echo $row->kewarganegaraan_ibu; ?></tr>
                    <tr><?php echo $row->pendidikan_terakhir_ibu; ?></tr>
                    <tr><?php echo $row->pekerjaan_ibu; ?></tr>
                    <tr><?php echo $row->no_ktp_ibu; ?></tr>
                    <tr><?php echo $row->penghasilan_perbulan_ibu; ?></tr>
                    <tr><?php echo $row->alamat_ibu; ?></tr>
                    <tr><?php echo $row->no_tlpn_ibu; ?></tr>	
                    <tr><a href="<?php echo site_url("pendaftaran/edit/".$row->id_daftra); ?>" >
										<button type = "button" class = "btn btn-info"><i class='fa fa-pencil'></i> Edit</button></a></tr>
								</tr>
								<?php } ?>
							</tbody>
							</table>

                        </div>
                </section>
                                            </form>                             
            </div>
        </div>

        <!-- page end-->
		 </div>
</section>