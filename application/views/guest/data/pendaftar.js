$("#FormPendaftaran").submit(function(e){
	  e.preventDefault();
	  
	  $.ajax({
		  url:$(this).attr('action'),
		  type:"post",
		  dataType : "HTML",
		  data: new FormData($(this)[0]),
		  contentType : false,
		  processData : false,
		  success:function(hasil){
			swal(
				  'Kode Pendaftaran '+ hasil,
				  '<a href="<?php echo site_url('guest/pendaftaran/uploadberkas/'); ?>'+hasil+'" target="_blank">Lanjutkan Ke Upload Berkas</a>, Terimakasih!',
				  'success'
				); 
			$('#FormPendaftaran').trigger("reset");
		  }
		  ,error:function(err){
			swal(
			  'Gagal!',
			  error,
			  'error'
			);
		  }
	  });
  });