<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url("admin/dashboard/"); ?>">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Gallery</li>
            </ol>
        </div><!--/.row-->
        
       
        <div class="panel panel-default">
        <div class="panel-heading">Masukkan Gallery</div>
        <div class="panel-body">
            <div class="col-md-6">
          <form role="form-horizontal" id="formGallery" method="post" action="<?php echo site_url("admin/Gallery/upload"); ?>" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="to" class="">Sekolah</label>
                <select name="sekolah" class="form-control">
                    <option value="TKIT">TK IT</option>
                    <option value="SDIT">SD IT</option>
                    <option value="SMPIT">SMP IT</option>
                </select>
            </div>
            <div class="form-group">
                <label for="bcc" class="">Judul</label>
                <input type="text" tabindex="1" name="judul" id="bcc" class="form-control">
            </div>

            <div class="form-group">
                <label for="subject" class="">Deskripsi</label>
                 <textarea class="wysihtml5 form-control" name='deskripsi' rows="9"></textarea>
            </div>

            <div class="form-group">
              
                <input type="file" class="default" name="filefoto">
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
        
      
