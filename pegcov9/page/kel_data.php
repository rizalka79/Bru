<?php
  $kel_nik = $_GET['kel_nik'];
  $queryx  = mysqli_query($koneksi,"SELECT * FROM tb_kel WHERE kel_nik='$kel_nik'");
  $datax   = mysqli_fetch_array($queryx);
  $kel_idx	= $datax['kel_id'];
  $kel_nikx	= $datax['kel_nik'];
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
  	<div class="row">
	  <div class="col-xs-12 col-md-12">
	    <h3><span class="fa fa-database"></span>
		    Data Keluarga Covid
		    <?php
		      $qjumlah = mysqli_query($koneksi,"SELECT * FROM tb_kel WHERE kel_nik='$kel_nikx'");
		      $jumlah = mysqli_num_rows($qjumlah);
		    ?>
		    <button class="btn btn-sm btn-default"><span class="badge"><?php echo $jumlah; ?></span></button>
		    <!-- <a href="?menu=kel_data" class="btn btn-sm btn-primary"><span class="fa fa-refresh"></a>-->
		    <a href="?menu=kel_tambah_lama&kel_nik=<?php echo $kel_nikx;?>" class="btn btn-sm btn-success">Tambah Keluarga Covid (Lama)<span class="fa fa-plus"></a>
		</h3>
	  </div>
	</div>

    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Informasi Keluarga</h3>
        </div>
        <div class="box-body">
         	<div class="row">
	            <div class="col-md-9">
	            	<div class="col-md-8">
						<div class="panel-body">
							<table class="table" cellpadding="8" cellspacing="8">
								<tr><th>Nama Keluarga</th><td>:</td> <td><?php echo $datax['kel_nama']; ?></td></tr>
								<tr><th>Jenis Kelamin </th><td>:</td> <td><?php echo $datax['kel_jk']; ?></td></tr>
								<tr><th>Hubungan </th><td>:</td> <td><?php echo $datax['kel_hubungan']; ?></td></tr>
								<tr><th>Tanggal Lahir </th><td>:</td> <td><?php echo $datax['kel_tgllahir']; ?></td></tr>	
								<tr><th>NIK </th><td>:</td> <td><?php echo $datax['kel_nik']; ?></td></tr>
								<tr><th>Status Pegawai </th><td>:</td> <td><?php echo $datax['kel_stapeg']; ?></td></tr>
								<tr><th>Unit Kerja </th><td>:</td> <td><?php echo $datax['kel_unitkerja']; ?></td></tr>	
								<tr><th>NIP </th><td>:</td> <td><?php echo $datax['kel_nip']; ?></td></tr>	
								</tr>														
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

<!-- ////////////////////////////////////////////// -->
	<div class="box">
        <div class="box-body">
          	<table id="example1" class="table table-bordered table-striped">
	            <thead>
		            <tr>
						<th>No</th>						
						<th>Tanggal Swab</th>
						<th>Tanggal Hasil</th>
						<th>Status Rawat</th>
						<th>Status Akhir</th>
						<th>Ket.</th>
						<th>Tanggal Kondisi</th>
						<th>Tanggal Input</th>
						<th>Opsi</th>
		            </tr>
	            </thead>
	            <tbody>
					<?php
					    $no = 1;
					    $sql = $koneksi->query("SELECT * FROM tb_kel WHERE kel_nik='$kel_nikx' ORDER BY kel_tgl DESC");
					    while ($data=$sql->fetch_assoc()) {
					?>
				    <tr>
				        <td> <?php echo $no++; ?> </td>
				        <td> <?php echo $data['kel_tglswab']; ?></td>
				        <td> <?php echo $data['kel_tglhasil']; ?></td>
				        <td> <?php echo $data['kel_starawat']; ?></td>
				        <td> <?php echo $data['kel_staakhir']; ?></td>
				        <td> <?php echo $data['kel_ket']; ?></td>
				        <td> <?php echo $data['kel_tgl']; ?></td>
				        <td> <?php echo $data['kel_tglinput']; ?></td>
				        <td>
							<a href="?menu=kel_edit&kel_id=<?php echo $data['kel_id']; ?>" class="btn btn-sm btn-success" title="Edit <?php echo $data['kel_nama'];?>"><span class="fa fa-edit"></a>
							<a onclick="return confirm('Anda yakin menghapus data Keluarga Covid <?php echo $data['kel_nama']; ?> ?')" href="?menu=kel_hapus&kel_id=<?php echo $data['kel_id']; ?>" class="btn btn-sm btn-danger" title="Hapus <?php echo $data['kel_nama'];?>" ><span class="fa fa-trash"></a>
				        </td>
				    </tr>
	      			<?php 
	    				} 
					?>
	            </tbody>
        	</table>
    	</div>
	</div>
</body>
</html>          