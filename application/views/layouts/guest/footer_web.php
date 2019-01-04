
</div>
</div>
</div>
<div class="wrap">
	<div class="copy-right">
		<p>© 2018 Lentera Hati | Design by <a href="http://w3layouts.com/">Nasa UI Designer!</a></p>
	</div>
</div>
</div>
	<script type="text/javascript" src="<?php echo base_url("assets/guest/js/jquery.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/guest/js/bootstrap.min.js"); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/jquery-ui.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/guest/js/jquery.PrintArea.js');?>"></script>
	<script src="<?php echo base_url('assets/guest/js/html2canvas.js');?>"></script>
	<script src="<?php echo base_url("assets/admin/js/sweetalert2.all.js"); ?>"></script>
	<script src="<?php echo base_url('assets/guest/js/jquery.dataTables.min.js')?>"></script>
 	<?php 
 	if(isset($menuUploadBerkas)) { ?>
 	<script src="<?php echo base_url('assets/guest/js/uploadberkas.js'); ?>"></script>
 	
 	<?php }
 	?>
	<script type="text/javascript">
		$(window).load( function() {
			$("#tanggal").datepicker({
				dateFormat:"dd/mm/yy",
				changeMonth: true,
				changeYear: true
			});
			
			$("#tanggallahirayah").datepicker({
				dateFormat:"dd/mm/yy",
				changeMonth: true,
				changeYear: true
			});
			
			$("#tanggallahiribu").datepicker({
				dateFormat:"dd/mm/yy",
				changeMonth: true,
				changeYear: true
			});
			
			//cetak print
			$("#cetak").bind("click", function(event) {
				// cetak data pada area <div id="#data-mahasiswa"></div>
				$('#halaman-print').printArea();
			});
			
			//kalau menu contact dibuka
	<?php if(isset($menuContact)) { ?>
	 $("#FormContact").submit(function(e) {
	  e.preventDefault();
	  
	  $.ajax({
		  url:$(this).attr('action'),
		  type:"post",
		  dataType : "HTML",
		  data: new FormData($(this)[0]),
		  contentType : false,
		  processData : false,
		  success:function(hasil){
			swal('Berhasil!',
				  'Komentar Anda Akan Segera Kami Respon, Terimakasih!',
				  'success'); 
			$('#FormContact').trigger("reset");
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
		<?php } ?>

		<?php if(isset($menuPendaftaran)) { 
			$this->load->view("guest/data/pendaftar.js");
		} ?>



		<?php if(isset($urlAjax)) { ?>
			//datatables
    table = $('#table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo $urlAjax ; ?>",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
 
    });
		<?php } ?>

		});
	</script>
</body>
</html>
