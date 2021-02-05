<?php

  mysqli_query($koneksi,"DELETE FROM tb_rekkel");

  $sqla = $koneksi->query("SELECT * FROM tb_kel");
    while ($dataa=$sqla->fetch_assoc()) {
      $bulan  = date("F",strtotime($dataa['kel_tgl']));
      $tahun   =date("Y",strtotime($dataa['kel_tgl']));
      $kel_starawat = $dataa['kel_starawat'];
      $kel_staakhir = $dataa['kel_staakhir'];
      $ada = 0;
      $sqlb = $koneksi->query("SELECT * FROM tb_rekkel WHERE rekkel_tahun='$tahun' AND rekkel_bulan='$bulan'");
      while ($datab=$sqlb->fetch_assoc()) {
        $ada++;
      }
      if ($ada==0){
        $rekkel_total = 1;
        $q ="INSERT INTO tb_rekkel(rekkel_tahun, rekkel_bulan, rekkel_total) VALUES ('$tahun', '$bulan', '$rekkel_total')";
        mysqli_query($koneksi,$q);    
      } else {
        $q ="UPDATE tb_rekkel SET rekkel_total=rekkel_total+1 WHERE rekkel_tahun='$tahun' AND rekkel_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      }

      if ($kel_starawat=="Isman"){
        $q ="UPDATE tb_rekkel SET rekkel_srisman=rekkel_srisman+1 WHERE rekkel_tahun='$tahun' AND rekkel_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      } else if ($kel_starawat=="Rujuk"){
        $q ="UPDATE tb_rekkel SET rekkel_srrujuk=rekkel_srrujuk+1 WHERE rekkel_tahun='$tahun' AND rekkel_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      } 

      if ($kel_staakhir=="Sembuh"){
        $q ="UPDATE tb_rekkel SET rekkel_sasembuh=rekkel_sasembuh+1 WHERE rekkel_tahun='$tahun' AND rekkel_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      } else if ($kel_staakhir=="Meninggal"){
        $q ="UPDATE tb_rekkel SET rekkel_samati  =rekkel_samati+1     WHERE rekkel_tahun='$tahun' AND rekkel_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      } else if ($kel_staakhir=="Dalam Proses"){
        $q ="UPDATE tb_rekkel SET rekkel_saproses=rekkel_saproses+1 WHERE rekkel_tahun='$tahun' AND rekkel_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      }
    }



?>