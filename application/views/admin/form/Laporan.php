<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url("admin/dashboard/"); ?>">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Laporan</li>
            </ol>
        </div><!--/.row-->
        
        <div class="panel panel-default">
        <div class="panel-heading">Pencarian Laporan Pendaftaran</div>
        <div class="panel-body">
        
        <div class="col-md-6">
          <form role="form-horizontal" class="form-inline" id="formLaporan" method="post" action="<?php echo site_url("admin/Laporan/pencarian"); ?>">
            
            <div class="form-group">
                <label for="to" class="">Sekolah</label>
                <select name="sekolah" class="form-control">
                    <option value="TKIT">TK IT</option>
                    <option value="SDIT">SD IT</option>
                    <option value="SMPIT">SMP IT</option>
                </select>
           
                 <select name="tahun" class="form-control">
                    <?php foreach($tahun as $thn) {  ?>
                     <option value="<?php echo date("Y",strtotime($thn->tgl_pendaftaran)); ?>"><?php echo date("Y",strtotime($thn->tgl_pendaftaran)); ?></option>
                    <?php } ?>
                </select>
                <button type='submit' class='btn btn-default' name="cari"><i class="fa fa-search"></i> Cari</button>
            </div>
        </form>
        </div>

        <div class="col-md-12">
            <br><br>
            <?php if(isset($menuLaporan)){ ?>
                <h4><?php echo $this->session->userdata("judulPencarian"); ?></h4>
                <table class="table" id="hasilpendaftaran">
                    <thead>
                         <tr>
                            <th>No. Pendaftaran</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat Rumah</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            <?php } ?>
        </div>

    </div>
</div>
        
      
