<html>
<head>
<title>Kartu PENDAFTARAN</title>
<style media="print">
   @page {
      size: auto;
      margin: 0;
  }
</style>
</head>
<body>
<button style="margin-left:300px"  onclick="PrintDoc()"> Print </button>

<div id="cetak_cover" align=center x:publishsource="Excel">
<table width="400" border="0" align="center" cellpadding="3" cellspacing="3" bgcolor="003300">
	<tr>
		<td>
		<table width="400" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="003300">
	<tr>
		<td height="40"  align="center" bgcolor="green"><img width="100%" src="<?php echo base_url('assets/admin/img/logo.jpg'); ?>"></td>
	</tr>
	<tr>
		<td bgcolor="#FFFFFF">
		<table width="600" border="0" align="center" cellpadding="3" cellspacing="2">
		<tr>
			<td colspan="4">=================================================================</td>
		</tr>
		<tr>
			<td width="150">No.Pendaftaran</td>
			<td width="11">:</td>
			<td width="237"><?php echo $row->nomor_pendaftaran; ?></td>
			<td rowspan="6" valign="center"><img height="150px" src="<?php echo base_url('assets/berkas/'.$row->berkas_pasfoto); ?>"></td>
		</tr>
		<tr>
			<td width="150">Nama</td>
			<td width="11">:</td>
			<td width="237"><?php echo $row->nm_lengkap; ?></td>
			
		</tr>
		<tr>
			<td>Tempat/Tanggal Lahir</td>
			<td>:</td>
			<td><?php echo $row->tempat."/".$row->tgl_lahir; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo ucwords($row->nm_lengkap); ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $row->alamat; ?></td>
		</tr>
		<tr>
			<td>Golongan Darah</td>
			<td>:</td>
			<td><?php echo $row->gol_darah; ?></td>
		</tr>
		<tr>
			<td align="top">Nama Ayah</td>
			<td>:</td>
			<td><?php echo $row->nm_ayah; ?></td>
		</tr>
		<tr></tr>
		<tr>
			<td colspan="4" align="center"><font size="2" color="006600">Kartu Ini Sebagai Bukti Pendaftaran Di Sekolah Al-Insan</td>
		</tr>
		</table></td>
		</tr>
</table>
</td>
</td>
</tr>
</table>
</div>
    
<script type="text/javascript">
 function PrintDoc() {
  var toPrint = document.getElementById('cetak_cover');
  var popupWin = window.open('');
  popupWin.document.open();
  popupWin.document.write('<body onload="window.print()">')
  popupWin.document.write(toPrint.outerHTML);
  popupWin.document.write('</body>');
  popupWin.document.close();
 }
</script>
</body>
</html>