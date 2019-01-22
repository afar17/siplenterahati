<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url("admin/dashboard/"); ?>">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Ganti Pengguna</li>
            </ol>
        </div><!--/.row-->
        
        <div class="panel panel-default">
        <?php $this->load->view("notif"); ?>
        <div class="panel-heading">Silahkan Isikan Password Lama dan Menggantinya</div>
        <div class="panel-body">
            <div class="col-md-6">
          <form role="form-horizontal"  method="post" action="<?php echo site_url("admin/Manajemen/prosesganti"); ?>">
            
            <div class="form-group">
                <label for="bcc" class="">Password Lama</label>
                <input type="text" tabindex="1" name="passwordlama" id="bcc" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="subject" class="">Password Baru</label>
                <input type="text" tabindex="1" name="passwordbaru" id="bcc" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="subject" class="">Confirm Password Baru</label>
                <input type="password" tabindex="1" name="confirmpasswordbaru" id="bcc" class="form-control"required>
            </div>
            <div class="compose-btn">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
            </div>
        </form>
    </div>
    </div>
</div>
        
      
