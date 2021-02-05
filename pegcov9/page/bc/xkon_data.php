<?php
  $peg_id = $_GET['peg_id'];
  $queryx  = mysqli_query($koneksi,"SELECT * FROM tb_peg WHERE peg_id='$peg_id'");
  $datax   = mysqli_fetch_array($queryx);
  $peg_idx	= $datax['peg_id'];
?>


<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
  	<div class="row">
	  <div class="col-xs-12 col-md-12">
	    <h3><span class="fa fa-file"></span>
		    Data Kondisi Pegawai Covid
		    <?php
		      $qjumlah = mysqli_query($koneksi,"SELECT * FROM tb_kon ORDER BY kon_id DESC");
		      $jumlah = mysqli_num_rows($qjumlah);
		    ?>
		    <button class="btn btn-sm btn-default"><span class="badge"><?php echo $jumlah; ?></span></button>
		    <a href="?menu=xkon_data" class="btn btn-sm btn-primary"><span class="fa fa-refresh"></a>
		    <a href="?menu=xkon_tambah" class="btn btn-sm btn-success">Tambah Kondisi <span class="fa fa-plus"></a>
		    <!-- <a onclick="return confirm('Anda yakin menghapus semua data industri rumahan ?')" href="?menu=kon_hapus_semua" class="btn btn-sm btn-danger">Hapus Semua Data <span class="glyphicon glyphicon-trash"></a> -->
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
						<th>Nama (JK/Lahir)</th>
						<th>NIP</th>
						<th>NIK</th>
						<th>Sta. Peg.</th>		
						<th>Org. (Unit)</th>				
						<th>Tgl. Swab/ Hasil</th>
						<th>Sta. Rawat (Sta. Akhir)</th>
						<th>Ket.</th>
						<th>Tanggal Kondisi</th>
						<th>Opsi</th>
		            </tr>
	            </thead>
	            <tbody>
					<?php
					    $no = 1;
					    $sql = $koneksi->query("SELECT * FROM tb_kon ORDER BY kon_id DESC");
					    while ($data=$sql->fetch_assoc()) {
					?>
				    <tr>
				        <td> <?php echo $no++; ?> </td>
				        <td> <?php echo $data['kon_peg_nama']; ?>
				        	<br>
				        <?php echo "(".$data['kon_peg_jk']." / ".$data['kon_peg_tgllahir'].")"    ; ?></td>

				        <td> <?php echo $data['kon_peg_nip']; ?></td>
				        <td> <?php echo $data['kon_peg_nik']; ?></td>
				        <td> <?php echo $data['kon_peg_stapeg']; ?></td>
				        <td> <?php echo $data['kon_peg_org']." (".$data['kon_peg_orgunit'].")"; ?></td>
				        <td> <?php echo $data['kon_tglswab']."/"; ?>
				        	<br>
							<?php echo $data['kon_tglhasil']; ?>
				        </td>
				        <td> <?php echo $data['kon_starawat']; ?>
				        	<br>
							<?php echo "(".$data['kon_staakhir'].")"; ?>
				        </td>
				        <td> <?php echo $data['kon_ket']; ?></td>
				        <td> <?php echo $data['kon_tgl']; ?></td>
				        
				        <td>
							<a href="?menu=xkon_edit&kon_id=<?php echo $data['kon_id']; ?>" class="btn btn-sm btn-success" title="Edit <?php echo $data['kon_peg_nama'];?>"><span class="fa fa-edit"></span></a>

							<a onclick="return confirm('Anda yakin menghapus data kondisi pegawai covid <?php echo $data['kon_nama']; ?> ?')" href="?menu=kon_hapus&kon_id=<?php echo $data['kon_id']; ?>" class="btn btn-sm btn-danger" title="Hapus <?php echo $data['kon_nama'];?>" ><span class="fa fa-trash"></span> </a>
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