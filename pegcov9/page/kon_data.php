<?php
  $peg_nik 		= $_GET['peg_nik'];
  $query_peg  	= mysqli_query($koneksi,"SELECT * FROM tb_peg WHERE peg_nik='$peg_nik'");
  $data_peg   	= mysqli_fetch_array($query_peg);
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
  	<div class="row">
	  <div class="col-xs-12 col-md-12">
	    <h3><span class="fa fa-male"></span>
		    Data Kondisi Pegawai Covid
		    <?php
		      $qjumlah = mysqli_query($koneksi,"SELECT * FROM tb_kon WHERE kon_peg_nik='$peg_nik'");
		      $jumlah = mysqli_num_rows($qjumlah);
		    ?>
		    <button class="btn btn-sm btn-default"><span class="badge"><?php echo $jumlah; ?></span></button>
		    <a  href="?menu=kon_data&peg_nik=<?php echo $peg_nik; ?>" 
		    	class="btn btn-sm btn-primary">
		    	<span class="fa fa-refresh">
		    </a>
		    <a  href="?menu=kon_tambah&peg_nik=<?php echo $peg_nik;?>" 
		    	class="btn btn-sm btn-success">Tambah Kondisi 
		    	<span class="fa fa-plus">
		    </a>
		</h3>
	  </div>
	</div>

    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Informasi Pegawai</h3>
        </div>
        <div class="box-body">
         	<div class="row">
	            <div class="col-md-9">
	            	<div class="col-md-8">
						<div class="panel-body">
							<table class="table" cellpadding="8" cellspacing="8">
								<tr><th>Nama Pegawai</th><td>:</td> 	<td><?php echo $data_peg['peg_nama']; ?></td></tr>
								<tr><th>Jenis Kelamin </th><td>:</td> 	<td><?php echo $data_peg['peg_jk']; ?></td></tr>
								<tr><th>Tanggal Lahir </th><td>:</td> 	<td><?php echo $data_peg['peg_tgllahir']; ?></td></tr>	
								<tr><th>NIK </th><td>:</td> 			<td><?php echo $data_peg['peg_nik']; ?></td></tr>	
								<tr><th>NIP </th><td>:</td> 			<td><?php echo $data_peg['peg_nip']; ?></td></tr>	
								<tr><th>Status Pegawai </th><td>:</td> 	<td><?php echo $data_peg['peg_stapeg']; ?></td>
								<tr><th>Organisasi </th><td>:</td> 		<td><?php echo $data_peg['peg_org']; ?></td>
								<tr><th>Org. Unit </th><td>:</td> 		<td><?php echo $data_peg['peg_orgunit']; ?></td>
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
					    $sql_kon = $koneksi->query("SELECT * FROM tb_kon WHERE kon_peg_nik='$peg_nik' ORDER BY kon_id DESC");
					    while ($data_kon=$sql_kon->fetch_assoc()) {
					?>
				    <tr>
				        <td> <?php echo $no++; ?> </td>
				        <td> <?php echo $data_kon['kon_tglswab']; ?></td>
				        <td> <?php echo $data_kon['kon_tglhasil']; ?></td>
				        <td> <?php echo $data_kon['kon_starawat']; ?></td>
				        <td> <?php echo $data_kon['kon_staakhir']; ?></td>
				        <td> <?php echo $data_kon['kon_ket']; ?></td>
				        <td> <?php echo $data_kon['kon_tgl']; ?></td>
				        <td> <?php echo $data_kon['kon_tglinput']; ?></td>				        
				        <td>
							<a  href="?menu=kon_edit&kon_id=<?php echo $data_kon['kon_id']; ?>" 
								class="btn btn-sm btn-success" 
								title="Edit <?php echo $data_kon['kon_peg_nama'];?>">
								<span class="fa fa-edit"></span>
							</a>
							<a 	onclick="return confirm('Anda yakin menghapus data kondisi pegawai covid <?php echo $data_kon['kon_nama']; ?> ?')" 
								href="?menu=kon_hapus&peg_nik=<?php echo $data_kon['kon_peg_nik'];?>&kon_id=<?php echo $data_kon['kon_id'];?>" 
								class="btn btn-sm btn-danger" 
								title="Hapus <?php echo $data_kon['kon_peg_nama'];?>" >
								<span class="fa fa-trash"></span>
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