<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url("admin/dashboard/"); ?>">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Input Staff</li>
            </ol>
        </div><!--/.row-->
        
        <div class="panel panel-default">
        <div class="panel-heading">Masukkan Data Staff</div>
        <div class="panel-body">
            <div class="col-md-6">
          <form role="form-horizontal"  method="post" action="<?php echo site_url("admin/Staff/save"); ?>" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="bcc" class="">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>

            <div class="form-group">
                <label for="subject" class="">NIP</label>
                 <input type='text' class="form-control" name='nip' id="nip" />
            </div>

            <div class="form-group">
                 <label for="subject" class="">Jabatan</label>
                <select name="jabatan" class="form-control">
                    <option value="Staff">Staff</option>
                    <option value="Guru">Guru</option>
                </select>
            </div>

            <div class="form-group">
                <label for="subject" class="">Status</label>
                <select name="status" class="form-control">
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
            </div>

             <div class="form-group">
               Upload Pas Foto <input type="file" class="default" name="fotostaf">
            </div>

            <div class="form-group">
                <div class='progress' style="height:25px;display: none" >
                    <div id="progress-bar" class="progress-bar progress-bar-success" progress-bar-striped" role="progressbar" aria-valuenow="10" aria-valuemin='0' aria-valuemax='100' style="width: 30%;" ></div>
                </div>
            </div>

            <div class="compose-btn">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Send</button>
            </div>
        </form>
    </div>
    </div>
</div>
        
      
