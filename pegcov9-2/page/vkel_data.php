<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
  	<div class="row">
	  <div class="col-xs-12 col-md-12">
	    <h3><span class="fa fa-file-o"></span>
		    Data Keluarga Covid
		    <?php
		      $qjumlah 	= mysqli_query($koneksi,"SELECT DISTINCT kel_peg_nik, kel_nik FROM tb_kel");
		      $jumlah 	= mysqli_num_rows($qjumlah);
		    ?>
		    <button class="btn btn-sm btn-default"><span class="badge"><?php echo $jumlah; ?></span></button>
		    <a 	href="?menu=vkel_data" 
		    	class="btn btn-sm btn-primary">
		    	<span class="fa fa-refresh">
		    </a>
		    <a 	href="?menu=vkel_tambah" 
		    	class="btn btn-sm btn-success">Tambah Keluarga Covid (Baru) 
		    	<span class="fa fa-plus">
		    </a>
		</h3>
	  </div>
	</div>
<!-- ////////////////////////////////////////////// -->
	<div class="box">
        <div class="box-body">
          	<table id="example1" class="table table-bordered table-striped">
	            <thead>
		            <tr>
						<th>No</th>
						<th>Nama Pegawai (NIK/NIP)</th>
						<th>Nama Keluarga</th>
						<th>Jenis Kelamin</th>
						<th>Hubungan</th>
						<th>Tanggal Lahir</th>
						<th>NIK</th>
						<th>Status Pegawai</th>
						<th>NIP</th>
						<th>Opsi</th>
		            </tr>
	            </thead>
	            <tbody>
					<?php
					    $no = 1;
					    $sql = $koneksi->query("SELECT DISTINCT 
					    	kel_peg_nama, 
					    	kel_peg_nik, 
					    	kel_peg_nip, 
					    	kel_nama, 
					    	kel_jk, 
					    	kel_hubungan, 
					    	kel_tgllahir, 
					    	kel_nik, 
					    	kel_stapeg, 
					    	kel_unitkerja, 
					    	kel_nip 
					    	FROM tb_kel");
					    while ($data=$sql->fetch_assoc()) {
					?>
				    <tr>
				        <td> <?php echo $no++; ?> </td>
				        <td> <?php echo $data['kel_peg_nama']." (".$data['kel_peg_nik']."/ ".$data['kel_peg_nip'].")"; ?></td>
				        <td> <?php echo $data['kel_nama']; ?></td>
				        <td> <?php echo $data['kel_jk']; ?></td>
				        <td> <?php echo $data['kel_hubungan']; ?></td>
				        <td> <?php echo $data['kel_tgllahir']; ?></td>
				        <td> <?php echo $data['kel_nik']; ?></td>
				        <td> <?php echo $data['kel_stapeg']; ?></td>
				        <td> <?php echo $data['kel_nip']; ?></td>
				        <td>
							<a 	href="?menu=kel_identitas_edit&peg_nik=<?php echo $data['kel_peg_nik']; ?>&kel_nik=<?php echo $data['kel_nik']; ?>" 
								class="btn btn-sm btn-success" 
								title="Edit <?php echo $data['kel_nama'];?>">
								<span class="fa fa-edit">
							</a>
							<a 	onclick="return confirm('Anda yakin menghapus data Keluarga Covid <?php echo $data['kel_nama']; ?> ?')" 
								href="?menu=vkel_hapus&kel_nik=<?php echo $data['kel_nik']; ?>" 
								class="btn btn-sm btn-danger" 
								title="Hapus <?php echo $data['kel_nama'];?>" >
								<span class="fa fa-trash">
							</a>
							<a 	href="?menu=kel_identitas&peg_nik=<?php echo $data['kel_peg_nik']; ?>" 
								class="btn btn-sm btn-default" 
								title="Detail Kondisi <?php echo $data['kel_nama'];?>">
								<span class="fa fa-eye"></a></a>
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