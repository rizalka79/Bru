<?php

  mysqli_query($koneksi,"DELETE FROM tb_rekkon");

  $sqla = $koneksi->query("SELECT * FROM tb_kon");
    while ($dataa=$sqla->fetch_assoc()) {
      $bulan  = date("m",strtotime($dataa['kon_tgl']));
      $tahun   =date("Y",strtotime($dataa['kon_tgl']));
      $kon_starawat = $dataa['kon_starawat'];
      $kon_staakhir = $dataa['kon_staakhir'];
      $ada = 0;
      $sqlb = $koneksi->query("SELECT * FROM tb_rekkon WHERE rekkon_tahun='$tahun' AND rekkon_bulan='$bulan'");
      while ($datab=$sqlb->fetch_assoc()) {
        $ada++;
      }
      if ($ada==0){
        $rekkon_total = 1;
        $q ="INSERT INTO tb_rekkon(rekkon_tahun, rekkon_bulan, rekkon_total) VALUES ('$tahun', '$bulan', '$rekkon_total')";
        mysqli_query($koneksi,$q);    
      } else {
        $q ="UPDATE tb_rekkon SET rekkon_total=rekkon_total+1 WHERE rekkon_tahun='$tahun' AND rekkon_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      }

      if ($kon_starawat=="Isman"){
        $q ="UPDATE tb_rekkon SET rekkon_srisman=rekkon_srisman+1 WHERE rekkon_tahun='$tahun' AND rekkon_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      } else if ($kon_starawat=="Rujuk"){
        $q ="UPDATE tb_rekkon SET rekkon_srrujuk=rekkon_srrujuk+1 WHERE rekkon_tahun='$tahun' AND rekkon_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      } 

      if ($kon_staakhir=="Sembuh"){
        $q ="UPDATE tb_rekkon SET rekkon_sasembuh=rekkon_sasembuh+1 WHERE rekkon_tahun='$tahun' AND rekkon_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      } else if ($kon_staakhir=="Meninggal"){
        $q ="UPDATE tb_rekkon SET rekkon_samati  =rekkon_samati+1     WHERE rekkon_tahun='$tahun' AND rekkon_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      } else if ($kon_staakhir=="Dalam Proses"){
        $q ="UPDATE tb_rekkon SET rekkon_saproses=rekkon_saproses+1 WHERE rekkon_tahun='$tahun' AND rekkon_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      }
    }



?>