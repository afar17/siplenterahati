<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url("admin/dashboard/"); ?>">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Tambah Pengguna</li>
            </ol>
        </div><!--/.row-->
        
        <div class="panel panel-default">
        <?php $this->load->view("notif"); ?>
        <div class="panel-heading">Silahkan Buat User Baru</div>
        <div class="panel-body">
            <div class="col-md-6">
          <form role="form-horizontal"  method="post" action="<?php echo site_url("admin/Manajemen/save"); ?>">
            
            <div class="form-group">
                <label for="bcc" class="">Nama Lengkap</label>
                <input type="text" tabindex="1" name="namalengkap" id="bcc" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="subject" class="">Username</label>
                <input type="text" tabindex="1" name="username" id="bcc" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="subject" class="">Password</label>
                <input type="password" tabindex="1" name="password" id="bcc" class="form-control" required>
            </div>
             <div class="form-group">
                <label for="subject" class="">Confirm Password</label>
                <input type="password" tabindex="1" name="confirm" id="bcc" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="subject" class="">Level</label>
                <select name="level" class="form-control" >
                    <option value="Admin">Admin</option>
                    <option value="operator_tk">Operator TK</option>
                    <option value="operator_sd">Operator SD</option>
                    <option value="operator_smp">Operator SMP</option>
                </select>
            </div>

            <div class="compose-btn">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
            </div>
        </form>
    </div>
    </div>
</div>
        
      
