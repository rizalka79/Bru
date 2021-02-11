<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  	<div class="row">
	  <div class="col-xs-12 col-md-8">
	    <h3><span class="fa fa-user"></span>
		    Profile     
		</h3>
	  </div>
	</div>
<div class="row">
<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Informasi Profile</h3>
        </div>
        <div class="box-body">
         	<div class="row">
	            <div class="col-md-9">
	            	<div class="col-md-8">
						<div class="panel-body">
							<table class="table" cellpadding="8" cellspacing="8">
								<tr>
									<th>Nama </th><td>:</td> <td><?php echo $profil['user_nama']; ?></td>
								</tr>
								<tr>
									<th>Email </th><td>:</td> <td><?php echo $profil['user_email']; ?></td>
								</tr>
								<tr>
									<th>Telepon </th><td>:</td> <td><?php echo $profil['user_telp']; ?></td>
								</tr>	
								<tr>
									<th>Username </th><td>:</td> <td><?php echo $profil['user_name']; ?></td>
								</tr>	
								<tr>
									<th>Organisasi </th><td>:</td> <td>
										<?php
										$sql_org = $koneksi->query("SELECT * FROM tb_org");
										while ($data_org=$sql_org->fetch_assoc()) {
											if ($profil['user_org']==$data_org['org_id']){
												echo $data_org['org_nama']; 
											}
										}
										?>										
									</td>
								</tr>	
								<tr>
									<th>Satuan Org. </th><td>:</td> <td>
										<?php
										$sql_orgsat = $koneksi->query("SELECT * FROM tb_orgsat");
										while ($data_orgsat=$sql_orgsat->fetch_assoc()) {
											if ($profil['user_orgsat']==$data_orgsat['orgsat_id']){
												echo $data_orgsat['orgsat_nama']; 
											}
										}
										?>										
									</td>
								</tr>	
								<tr>
									<th>Unit Org. </th><td>:</td> <td><?php echo $profil['user_orgunit']; ?></td>
								</tr>	
								<tr>
									<th>NIP </th><td>:</td> <td><?php echo $profil['user_nip']; ?></td>
								</tr>	
								<tr>
									<th>NIK </th><td>:</td> <td><?php echo $profil['user_nik']; ?></td>
								</tr>														
							</table> <br>
							<a 	class="btn btn-sm btn-primary" 
								href="?menu=user_profil_edit"
								title="Edit Profil">Edit
							</a>
							<a 	onclick="return confirm('Anda yakin menghapus profile anda ? Anda tidak dapat login kembali setelah menghapus profile anda')" 
								href="?menu=hapus_logout&id_admin=<?php echo $profil[id_admin]; ?>" 
								class="btn btn-sm btn-danger" 
								title="Hapus <?php echo $data['user_nama'];?>" >Hapus
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>
</div>
</section>
</body>
</html>