<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
          <div class="row">
               <ol class="breadcrumb">
                    <li><a href="#">
                         <em class="fa fa-home"></em>
                    </a></li>
                    <li class="active">Dashboard</li>
               </ol>
          </div><!--/.row-->
          <div class="panel panel-container">
               <div class="row">
               <div class="col-md-12 no-padding">
                    <div class="panel-body">
                    <table class='table' ui-jq="footable">
                    <tr><th>Nama Lengkap</th><td><?php echo $row->nm_lengkap; ?></td>
                        <td rowspan="4">
                         <a class="example-image-link" href="<?php echo base_url('assets/berkas/'.$row->berkas_pasfoto); ?>" data-lightbox="example-1">
                              <img class="example-image" src="<?php echo base_url('assets/berkas/'.$row->berkas_pasfoto); ?>" width="150px" height="150px">
                         </a>
                        </td>
                    </tr>
                    <tr><th>Nama Panggilan</th><td><?php echo $row->nm_panggilan; ?></td>

                    </tr>
                    <tr><th>NIK</th><td><?php echo $row->nik_siswa; ?></td></tr>
                    <tr><th>Jenis Kelamin</th><td><?php echo $row->jenis_kelamin; ?></td></tr>
                    <tr><th>Tempat</th><td><?php echo $row->tempat; ?></td></tr>
                    <tr><th>Tanggal Lahir</th><td><?php echo $row->tgl_lahir; ?></td>
                         <td rowspan="4">
                              <a class="example-image-link" href="<?php echo base_url('assets/berkas/'.$row->berkas_akte_kelahiran); ?>" data-lightbox="example-1">
                                <img class="example-image"  src="<?php echo base_url('assets/berkas/'.$row->berkas_akte_kelahiran); ?>" width="150px" height="150px">
                         </a>
                            
                        </td>
                    </tr>
                    <tr><th>Agama</th><td><?php echo $row->agama; ?></td></tr>
                    <tr><th>Alamat</th><td><?php echo $row->alamat; ?></td></tr>
                    <tr><th>Kewarganegaraan</th><td><?php echo $row->kewarganegaraan; ?></td></tr>
                    <tr><th>Anak Ke</th><td><?php echo $row->anak_ke; ?></td></tr>
                    <tr><th>Jumlah Saudara Kandung</th><td><?php echo $row->jumlah_saudara_kandung; ?>
                         <td rowspan="4">
                          <a class="example-image-link" href="<?php echo base_url('assets/berkas/'.$row->berkas_fotokeluarga); ?>" data-lightbox="example-1">
                              <img class="example-image"  src="<?php echo base_url('assets/berkas/'.$row->berkas_fotokeluarga); ?>" width="150px" height="150px">
                          </a>
                        </td>

                    </td></tr>
                    <tr><th>Jumlah_saudara_angkat</th><td><?php echo $row->jumlah_saudara_angkat; ?></td></tr>
                    <tr><th>Jumlah Saudara Tiri</th><td><?php echo $row->jumlah_saudara_tiri; ?></td></tr>
                    <tr><th>Status Anak</th><td><?php echo $row->status_anak1; ?></td></tr>
                    <tr><th>Gol Darah</th><td><?php echo $row->gol_darah; ?></td></tr>  
                    <tr><th>Imunisasi Yang Diterima</th><td><?php echo $row->imunisasi_yg_diterima; ?>
                         
                         <td rowspan="4">
                               <a class="example-image-link" href="<?php echo base_url('assets/berkas/'.$row->berkas_ijazah); ?>" data-lightbox="example-1">
                                  <img class="example-image"  src="<?php echo base_url('assets/berkas/'.$row->berkas_ijazah); ?>" width="150px" height="150px">
                               </a>
                             
                        </td>
                    </td></tr>
                    <tr><th>Jarak Rumah Ke Sekolah</th><td><?php echo $row->jarak_rumah_kesekolah; ?></td></tr>
                    <tr><th>Ukuran Baju</th><td><?php echo $row->uk_baju; ?></td></tr>
                    <tr><th>Nama Ayah</th><td><?php echo $row->nm_ayah; ?></td></tr>
                    <tr><th>Tempat Lahirr</th><td><?php echo $row->tempat_ayah; ?></td></tr>
                    <tr><th>TTL</th><td><?php echo $row->tgl_lahir_ayah; ?></td></tr>
                    <tr><th>Agama</th><td><?php echo $row->agama_ayah; ?></td></tr> 
                    <tr><th>Kewarganegaraan</th><td><?php echo $row->kewarganegaraan_ayah; ?></td></tr>
                    <tr><th>Pendidikan Terakhir</th><td><?php echo $row->pendidikan_ayah; ?></td></tr>
                    <tr><th>Pekerjaan</th><td><?php echo $row->pekerjaan_ayah; ?></td></tr>
                    <tr><th>No KTP</th><td><?php echo $row->no_ktp_ayah; ?></td></tr>
                    <tr><th>Penghasilan Perbulan</th><td><?php echo $row->penghasilan_perbulan_ayah; ?></td></tr>
                    <tr><th>Alamat Ayah</th><td><?php echo $row->alamat_ayah; ?></td></tr>
                    <tr><th>No Telepon</th><td><?php echo $row->no_tlpn_ayah; ?></td></tr>
                    <tr><th>Nama Ibu</th><td><?php echo $row->nm_ibu; ?></td></tr>
                    <tr><th>Tempat Lahir</th><td><?php echo $row->tempat_ibu; ?></td></tr>
                    <tr><th>TTL</th><td><?php echo $row->tgl_lahir_ibu; ?></td></tr>
                    <tr><th>Agama</th><td><?php echo $row->agama_ibu; ?></td></tr>
                    <tr><th>Kewarganegaraan</th><td><?php echo $row->kewarganegaraan_ibu; ?></td></tr>
                    <tr><th>Pendidikan Terakhir</th><td><?php echo $row->pendidikan_terakhir_ibu; ?></td></tr>
                    <tr><th>Pekerjaan</th><td><?php echo $row->pekerjaan_ibu; ?></td></tr>
                    <tr><th>No KTP</th><td><?php echo $row->no_ktp_ibu; ?></td></tr>
                    <tr><th>Penghasilan Perbulan</th><td><?php echo $row->penghasilan_perbulan_ibu; ?></td></tr>
                    <tr><th>Alamat</th><td><?php echo $row->alamat_ibu; ?></td></tr>
                    <tr><th>No Telepon</th><td><?php echo $row->no_tlpn_ibu; ?></td></tr>
		        </table>
                  <center>
                  <form method="post" action="<?php echo site_url("admin/Pendaftaran"); ?>">
                    Keputusan : <select name="status">
                         <option value="lulus">Lulus</option>
                         <option value="tidak">Tidak</option>
                    </select>
                    <input type="hidden" name="iddaftar" value="<?php echo $row->id_daftar; ?>" />
                    <input type="submit" name="save" value="save" />
                  </form>
             </center>
               </div>
          </div>
     </div>
          </div>

                      