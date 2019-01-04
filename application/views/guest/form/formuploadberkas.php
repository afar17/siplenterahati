<!--main content start-->
<div class="main-top">
 <div class="main">
	<div class="section group">
		<div class="col span_2_of_3">
			<div class="contact-form">
		<h3>Upload Berkas Anda</h3>
		
		<div class="panel-body">
			<div class="position-center">
			<form role="form-horizontal" id="formGallery" method="post" action="<?php echo site_url("guest/Pendaftaran/saveUpload"); ?>" enctype="multipart/form-data">
			<input type="hidden" id='kodepeserta' name="kodepeserta" value="<?php if(isset($kodependaftaran)) echo $kodependaftaran; ?>"/>
			<div class="form-group">
				<label><strong>Pas Foto</strong></label><br>
              <input type="file" class="default" name="filefoto">
            </div>
            <div class="form-group">
				<label><strong>Akte Kelahiran</strong></label><br>
              <input type="file" class="default" name="fileberkas">
            </div>
            <div class="form-group">
            	<label><strong>Kartu Keluarga</strong></label><br>
              <input type="file" class="default" name="fileberkas2">
            </div>
            <div class="form-group">
            	<label><strong>Ijazah Terakhir</strong></label><br>
              <input type="file" class="default" name="fileberkas3">
            </div>
             <div class="form-group">
                <div class='progress' style="height:25px;display: none" >
                    <div id="progress-bar" class="progress-bar progress-bar-success" progress-bar-striped" role="progressbar" aria-valuenow="10" aria-valuemin='0' aria-valuemax='100' style="width: 30%;" ></div>
                </div>
            </div>
             <div class="compose-btn">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Upload</button>
            </div>
			</form>
            </div>

            </div>
		  </div>
        </div>
	<!-- page end-->
	</div>
</section>
 


		
	   
    	
    	
            