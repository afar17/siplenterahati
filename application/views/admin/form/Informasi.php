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

		<?php if(isset($edit)){ ?>
		<form method="post" role="form" action="<?php echo site_url("admin/info/update"); ?>">
		<?php } else { ?>
		<form method="post" role="form" action="<?php echo site_url("admin/info/save"); ?>">
		<?php } ?>
		<div class="form-group">
			<label for="judul">Tanggal Terbit</label>
			<input type="text" class="form-control" id="tanggal" name="tgl_terbit" placeholder="waktu" value="<?php if(isset($row->tgl_terbit)) echo date("d/m/Y",strtotime($row->tgl_terbit));  ?>">
		</div>
         <div class="form-group">
			<label for="judul">Sekolah</label>
			<select name="sekolah" class="form-control">
			<option value="">...Pilih Sekolah...</option>
			<?php foreach($sekolah as $skul) { ?>
				<option value="<?php echo $skul->kodesekolah; ?>" <?php if(isset($row->sekolah_kodesekolah) and $row->sekolah_kodesekolah==$skul->kodesekolah) echo "selected='selected'"; ?>><?php echo $skul->namasekolah; ?></option>
			<?php } ?>
			</select>
		</div>
                                <div class="form-group">
			<label for="judul">Judul</label>
			<input type="text" class="form-control" id="jdl_berita"name="jdl_berita" placeholder="judul" value="<?php if(isset($row->jdl_berita)) echo $row->jdl_berita;  ?>">
		</div>
	   
		<div class="form-group">
			<label for="isi_berita">Isi</label>
                                <textarea  id="editor1" rows="10" cols="80" name="isi_berita"  height='60'><?php if(isset($row->isi_berita)) echo $row->isi_berita;  ?></textarea>
		</div>
								
	<?php 
	if(isset($edit)){
	?>
		<input type="hidden" name="id_info" value="<?php echo $row->id_info; ?>" />
		 <button type="submit" name="update" value="update" class="btn btn-info">Update</button>
	<?php } else { ?>
		 <button type="submit" name="save" value="save" class="btn btn-info">Save</button>
	<?php } ?>
                               
    </form>
    </div>
</div>
</div>

