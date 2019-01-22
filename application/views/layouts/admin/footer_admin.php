			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="<?php echo base_url('assets/admin/js/jquery-1.11.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/bootstrap-datepicker.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/custom.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/admin.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/sweetalert2.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/toastr.min.js'); ?>"></script>
	
	<script src="<?php echo base_url('assets/admin/js/lightbox-plus-jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/jquery.dataTables.js'); ?>"></script>
	<script>
	
	//MEMBUAT INPUT AUDIO
	$('<audio id="chatAudio"><source src="<?php echo base_url('assets/audio/notifikasi.ogg'); ?>" type="audio/ogg"><source src="<?php echo base_url('assets/audio/notifikasi.mp3'); ?>" type="audio/mpeg"><source src="<?php echo base_url('assets/audio/notifikasi.wav'); ?>" type="audio/wav"></audio>').appendTo('body');
	
	//pusher
	Pusher.logToConsole = true;
	
	//REALTIME-PUSHER UNTUK KIRIMAN DARI CONTACT YANG MELIHAT HANYA ADMIN
	<?php if($this->session->userdata("level")=='Admin') { ?>
    var pusher = new Pusher('c4aa79921b531bda044b', {
      cluster: 'mt1',
      forceTLS: true
    });
    <?php $jumlahkomentar = $this->bantuan->jumlahkomentar();?>
	var jumlah =<?php echo $jumlahkomentar; ?>;
    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
     // $("#hasil").append("<li class='media'>"+data.name+" : "+data.message+"</li>");
	 toastr.options = {
			  "debug": false,
			  "positionClass": "toast-bottom-right",
			  "onclick": null,
			  "fadeIn": 300,
			  "fadeOut": 1000,
			  "extendedTimeOut": 1000
			}
	  toastr.info('Pesan Baru Dari '+data.name+" : "+ data.message + 'Success Alert', {timeOut: 5000});
	  $('#chatAudio')[0].play();
	  jumlah = jumlah+1;
	  $("#pesanMasuk").html(jumlah);
	  $("#listPesanMasuk").prepend('<li><div class="dropdown-messages-box"><img alt="image" class="img-circle" src="<?php echo base_url('assets/admin/img/avatar.png'); ?>"><div class="message-body"><a href="<?php echo site_url("admin/Message/readMessage/"); ?>'+data.idkomentar+'">'+data.name+'<strong> &nbsp;'+data.message+'</strong><br>'+data.email+'.</a><br /><small class="text-muted">'+data.tanggalkomentar+'</small></div></div></li><li class="divider"></li>');
    });

	<?php } //akhir dari admin ?>


    //REALTIME-PUSHER UNTUK PENDAFTARAN
    var pusherPendaftaran = new Pusher('0d6441fb549705e4a440', {
      cluster: 'mt1',
      forceTLS: true
    });

    //script php untuk kondisi channel sesuai level masing2

    <?php 
    if($this->session->userdata('level')=='Admin'){
    	$pendaftaran = $this->bantuan->jumlahPendaftaran("All");
		$kodesekolah = "All";
    	$channel = 'admin-channel';
    	$event = 'admin-event';
    }
    else if($this->session->userdata('level')=='operator_tk') {
    	$pendaftaran = $this->bantuan->jumlahPendaftaran("TKIT");
		$kodesekolah = "TKIT";
    	$channel = 'tk-channel';
    	$event = 'tk-event';
    }
    else if($this->session->userdata('level')=='operator_sd') {
    	$pendaftaran = $this->bantuan->jumlahPendaftaran("SDIT");
		$kodesekolah = "TKIT";
    	$channel = 'sd-channel';
    	$event = 'sd-event';
    }
    else {
    	$pendaftaran = $this->bantuan->jumlahPendaftaran("SMPIT");
		$kodesekolah = "TKIT";
    	$channel = 'smp-channel';
    	$event = 'smp-event';
    }

    ?>

    var channelPendaftaran = pusherPendaftaran.subscribe('<?php echo $channel; ?>');
    channelPendaftaran.bind('<?php echo $event ; ?>', function(data) {
     // $("#hasil").append("<li class='media'>"+data.name+" : "+data.message+"</li>");
	 toastr.options = {
			  "debug": false,
			  "positionClass": "toast-bottom-right",
			  "onclick": null,
			  "fadeIn": 300,
			  "fadeOut": 1000,
			  "timeOut": 5000,
			  "extendedTimeOut": 1000
			}
	  // toastr.info('Pendaftar Baru ', {timeOut: 5000});
	  $('#chatAudio')[0].play();
	  $("#hasilpendaftaran tbody").prepend("<tr><td>"+data.kodependaftaran+"</td><td>"+data.name+"</td><td>"+data.tanggallahir+"<td>"+data.alamat+"</td><td><a href='<?php echo site_url('admin/pendaftaran/lihatdetail/'); ?>"+data.kodependaftaran+"'>Lihat</a></td></tr>");
    });
	//endPusher
	
	//datatables untuk pendaftaran
	//table datatable Server Side
         table = $('#hasilpendaftaran').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
        	<?php if(isset($menuLaporan)) { ?>
        		"url": "<?php echo site_url('admin/Laporan/datatables/'.$kodeajax) ?>",
        	<?php }  else { ?>
        		"url": "<?php echo site_url('admin/Pendaftaran/datatables/'.$kodesekolah) ?>",
        	<?php } ?>
        	
        	"type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
           "targets": [ -1,2,], //last column
           "orderable": false, //set not orderable
        },
        ],
 
    });
	</script>
		
</body>
</html>