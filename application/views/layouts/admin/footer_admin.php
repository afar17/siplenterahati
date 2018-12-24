			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="<?php echo base_url('assets/admin/js/jquery-1.11.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/bootstrap-datepicker.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/custom.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/custom.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/admin.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/sweetalert2.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/toastr.min.js'); ?>"></script>
	
	
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
			  "timeOut": 5000,
			  "extendedTimeOut": 1000
			}
	  toastr.info('Pesan Baru Dari '+data.name+" : "+ data.message + 'Success Alert', {timeOut: 5000});
	  $('#chatAudio')[0].play();
	  jumlah = jumlah+1;
	  $("#pesanMasuk").html(jumlah);
	  $("#listPesanMasuk").prepend('<li><div class="dropdown-messages-box"><img alt="image" class="img-circle" src="<?php echo base_url('assets/admin/img/avatar.png'); ?>"><div class="message-body"><a href="<?php echo site_url("admin/readMessage/"); ?>'+data.idkomentar+'">'+data.name+'<strong>'+data.message+'</strong><br>'+data.email+'.</a><br /><small class="text-muted">'+data.tanggalkomentar+'</small></div></div></li><li class="divider"></li>');
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
    	$channel = 'admin-channel';
    	$event = 'admin-event';
    }
    else if($this->session->userdata('level')=='operator_tk') {
    	$channel = 'tk-channel';
    	$event = 'tk-event';
    }
    else if($this->session->userdata('level')=='operator_sd') {
    	$channel = 'sd-channel';
    	$event = 'sd-event';
    }
    else {
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
	  $("#hasilpendaftaran tbody").append("<tr><td>1</td><td>"+data.name+"</td><td>"+data.tanggallahir+"<td>"+data.alamat+"</td></tr>");
    });
	//endPusher
	window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>