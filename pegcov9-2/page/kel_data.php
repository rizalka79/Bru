<?php
  $peg_nik 		= $_GET['peg_nik'];
  $kel_nik 		= $_GET['kel_nik'];
  $query_peg  	= mysqli_query($koneksi,"SELECT * FROM tb_peg WHERE peg_nik='$peg_nik'");
  $data_peg   	= mysqli_fetch_array($query_peg);
  $query_kel  	= mysqli_query($koneksi,"SELECT * FROM tb_kel WHERE kel_nik='$kel_nik'");
  $data_kel   	= mysqli_fetch_array($query_kel);
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
		      $qjumlah = mysqli_query($koneksi,"SELECT * FROM tb_kel WHERE kel_nik='$kel_nik'");
		      $jumlah = mysqli_num_rows($qjumlah);
		    ?>
		    <button class="btn btn-sm btn-default"><span class="badge"><?php echo $jumlah; ?></span></button>
		    <a  href="?menu=kel_data&peg_nik=<?php echo $peg_nik; ?>&kel_nik=<?php echo $kel_nik; ?>" 
		    	class="btn btn-sm btn-primary">
		    	<span class="fa fa-refresh">
		    </a>
		    <a  href="?menu=kel_tambah_lama&peg_nik=<?php echo $peg_nik;?>&kel_nik=<?php echo $kel_nik;?>" 
		    	class="btn btn-sm btn-success">Tambah Keluarga Covid (Lama)
		    	<span class="fa fa-plus">
		    </a>
		</h3>
	  </div>
	</div>

    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Informasi Pegawai dan Keluarga</h3>
        </div>
        <div class="box-body">
         	<div class="row">
	            <div class="col-md-9">
	            	<div class="col-md-6">
						<div class="panel-body">
							<table class="table" cellpadding="8" cellspacing="8">
								<tr><th>Nama Pegawai</th><td>:</td> 	<td><?php echo $data_peg['peg_nama']; ?></td></tr>
								<tr><th>Jenis Kelamin </th><td>:</td> 	<td><?php echo $data_peg['peg_jk']; ?></td></tr>
								<tr><th>Tanggal Lahir </th><td>:</td> 	<td><?php echo $data_peg['peg_tgllahir']; ?></td></tr>	
								<tr><th>NIK </th><td>:</td> 			<td><?php echo $data_peg['peg_nik']; ?></td></tr>	
								<tr><th>NIP </th><td>:</td> 			<td><?php echo $data_peg['peg_nip']; ?></td></tr>	
								<tr><th>Status Pegawai </th><td>:</td> 	<td><?php echo $data_peg['peg_stapeg']; ?></td>
								<tr><th>Organisasi </th><td>:</td> 		<td><?php echo $data_peg['peg_org']; ?></td>
								<tr><th>Satuan Org. </th><td>:</td> 	<td><?php echo $data_peg['peg_orgsat']; ?></td>
								</tr>														
							</table>
						</div>
					</div>
	            	<div class="col-md-6">
						<div class="panel-body">
							<table class="table" cellpadding="8" cellspacing="8">
								<tr><th>Nama Keluarga</th><td>:</td> 	<td><?php echo $data_kel['kel_nama']; ?></td></tr>
								<tr><th>Jenis Kelamin </th><td>:</td> 	<td><?php echo $data_kel['kel_jk']; ?></td></tr>
								<tr><th>Hubungan </th><td>:</td> 		<td><?php echo $data_kel['kel_hubungan']; ?></td></tr>
								<tr><th>Tanggal Lahir </th><td>:</td> 	<td><?php echo $data_kel['kel_tgllahir']; ?></td></tr>	
								<tr><th>NIK </th><td>:</td> 			<td><?php echo $data_kel['kel_nik']; ?></td></tr>
								<tr><th>Status Pegawai </th><td>:</td> 	<td><?php echo $data_kel['kel_stapeg']; ?></td></tr>
								<tr><th>NIP </th><td>:</td> 			<td><?php echo $data_kel['kel_nip']; ?></td></tr>	
								<tr><th>							
									<a 	href="?menu=kel_identitas_edit&peg_nik=<?php echo $peg_nik; ?>&kel_nik=<?php echo $kel_nik; ?>" 
										class="btn btn-sm btn-success" 
										title="Edit <?php echo $data['kel_nama'];?>">Edit Identitas Keluarga
									<span class="fa fa-edit"></a> 
								</th></tr>	
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
					    $sql = $koneksi->query("SELECT * FROM tb_kel WHERE kel_nik='$kel_nik' ORDER BY kel_tgl DESC");
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
							<a 	href="?menu=kel_edit&kel_id=<?php echo $data['kel_id']; ?>&peg_nik=<?php echo $peg_nik; ?>" 
								class="btn btn-sm btn-success" 
								title="Edit <?php echo $data['kel_nama'];?>">
								<span class="fa fa-edit">
							</a>
							<a 	onclick="return confirm('Anda yakin menghapus data Keluarga Covid <?php echo $data['kel_nama']; ?> ?')" 
								href="?menu=kel_hapus&peg_nik=<?php echo $peg_nik;?>&kel_nik=<?php echo $kel_nik;?>&kel_id=<?php echo $data['kel_id']; ?>" 
								class="btn btn-sm btn-danger" 
								title="Hapus <?php echo $data['kel_nama'];?>" >
								<span class="fa fa-trash">
							</a>
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