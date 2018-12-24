 <div class="col_1_of_3 span_1_of_3">
	<h3>Beragam Informasi</h3>
	<div class="latest-news-grid">
		<?php 
		
			$informasi = $this->bantuan->getInformasi();
			foreach($informasi as $row) { ?>
			<div class="latest-news-pic">
				<?php echo $row->jdl_berita; ?>
			</div>
			<div class="latest-news-info">
			<a href="#"><?php echo date("d/m/Y",strtotime($row->tgl_terbit)); ?></a>
			
			<?php echo word_limiter($row->isi_berita,20); ?>
			<a href="<?php echo site_url('Home/infodetail/'.$row->id_info); ?>">Selengkapnya</a>
			</div>
		<div class="clear"> </div><br>
		<?php } ?>
	</div>
</div>
<div class="clear"></div> 