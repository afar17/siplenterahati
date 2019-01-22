<?php
if($this->session->flashdata('success')){ ?>
	<div class='alert alert-success'> 
	<button class="close" data-dismiss="alert">×</button>
	<h4 class='alert-heading'>Sukses!</h4>
	 <span><?php echo $this->session->flashdata('success'); ?></span>. </div>
<?php } 
if ($this->session->flashdata('error')){ ?>
<div class="alert alert-danger">
  <strong>Maaf !</strong> <?php echo $this->session->flashdata('error'); ?>
</div>
<?php } ?>