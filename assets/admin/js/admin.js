$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}

		//fungsi upload gambar
		var inputFile = $('input[name=file]');
		var uploadURI = $('#formGallery').attr('action');
		var progressBar = $('#progress-bar');

			$("#formGallery").on('submit',(function(e) {
			e.preventDefault();
			 
			var form = $(this);
			var formgalleri = false;
			if (window.FormData){
				formgalleri = new FormData(form[0]);
			}
			 var formAction = form.attr('action');
			 
			$.ajax({
	        	url: uploadURI,   	// Url to which the request is send
				type: "POST",      				// Type of request to be send, called as method
				data:formgalleri ? formgalleri : form.serialize(), 		// Data sent to server, a set of key/value pairs representing form fields and values 
				contentType: false,       		// The content type used when sending data to the server. Default is: "application/x-www-form-urlencoded"
	    	    cache: false,					// To unable request pages to be cached
				processData:false,  			// To send DOMDocument or non processed data file it is set to false (i.e. data should not be in the form of string)
				success: function(result)  		// A function to be called if request succeeds
			    {
					swal(
					  'Berhasil!',
					  'File telah diunggah!',
					  'success'
					);
					$('#formGallery').trigger("reset");	
					$(".progress").fadeOut(5000);
			    },
				xhr: function() {
						var xhr = new XMLHttpRequest();
						xhr.upload.addEventListener("progress", function(event) {
							if (event.lengthComputable) {
								var percentComplete = Math.round( (event.loaded / event.total) * 100 );
								// console.log(percentComplete);
								
								$('.progress').show();
								progressBar.css({width: percentComplete + "%"});
								progressBar.text(percentComplete + '%');


							};
						}, false);

						return xhr;
						
				}
				,error: function(err) {
				  // Fail message
				  swal(
					  'Gagal!',
					  error,
					  'error'
					);
				}	        
			});
			
		}));
		//akhir fungsi upload gambar
		
		
	});
	
	
    $("#tanggal").datepicker({
		dateFormat:"dd/mm/yy"
	});