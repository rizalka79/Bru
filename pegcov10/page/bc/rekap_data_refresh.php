<?php

  mysqli_query($koneksi,"DELETE FROM tb_rekkon");
  mysqli_query($koneksi,"DELETE FROM tb_rekkel");

  $sqla = $koneksi->query("SELECT * FROM tb_kon");
    while ($dataa=$sqla->fetch_assoc()) {
      $bulan  = date("F",strtotime($dataa['kon_tgl']));
      $tahun   =date("Y",strtotime($dataa['kon_tgl']));
      $kon_kondisi = $dataa['kon_kondisi'];
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
      } else if ($kon_kondisi=="Meninggal"){
        $q ="UPDATE tb_rekkon SET rekkon_samati  =rekkon_mati+1     WHERE rekkon_tahun='$tahun' AND rekkon_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      } else if ($kon_kondisi=="Dalam Proses"){
        $q ="UPDATE tb_rekkon SET rekkon_saproses=rekkon_saproses+1 WHERE rekkon_tahun='$tahun' AND rekkon_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      }
    }


  $sqla = $koneksi->query("SELECT * FROM tb_kel");
    while ($dataa=$sqla->fetch_assoc()) {
      $bulan  = date("F",strtotime($dataa['kel_tgl']));
      $tahun   =date("Y",strtotime($dataa['kel_tgl']));
      $kel_kondisi = $dataa['kel_kondisi'];
      $ada = 0;
      $sqlb = $koneksi->query("SELECT * FROM tb_rekap WHERE rekkel_tahun='$tahun' AND rekkel_bulan='$bulan'");
      while ($datab=$sqlb->fetch_assoc()) {
        $ada++;
      }
      if ($ada==0){
        $rekkel_keljumlah = 1;
        $q ="INSERT INTO tb_rekap(rekkel_tahun, rekkel_bulan, rekkel_keljumlah) VALUES ('$tahun', '$bulan', '$rekkel_keljumlah')";
        mysqli_query($koneksi,$q);    
      } else {
        $q ="UPDATE tb_rekap SET rekkel_keljumlah=rekkel_keljumlah+1 WHERE rekkel_tahun='$tahun' AND rekkel_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      }
      if ($kel_kondisi=="Isman"){
        $q ="UPDATE tb_rekap SET rekkel_kelisman=rekkel_kelisman+1 WHERE rekkel_tahun='$tahun' AND rekkel_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      } else if ($kel_kondisi=="Rujuk"){
        $q ="UPDATE tb_rekap SET rekkel_kelrujuk=rekkel_kelrujuk+1 WHERE rekkel_tahun='$tahun' AND rekkel_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      } else if ($kel_kondisi=="Sembuh"){
        $q ="UPDATE tb_rekap SET rekkel_kelsembuh=rekkel_kelsembuh+1 WHERE rekkel_tahun='$tahun' AND rekkel_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      } else if ($kel_kondisi=="Meninggal"){
        $q ="UPDATE tb_rekap SET rekkel_kelmeninggal=rekkel_kelmeninggal+1 WHERE rekkel_tahun='$tahun' AND rekkel_bulan='$bulan'";
        mysqli_query($koneksi,$q);
      }
    }


    $sqlx = $koneksi->query("SELECT * FROM tb_rekap");
    while ($datax=$sqlx->fetch_assoc()) {
      $rekap_id     = $datax['rekap_id'];
      $rekap_total  = $datax['rekkon_total']+$datax['rekap_keljumlah'];
      $q ="UPDATE tb_rekap SET rekap_total='$rekap_total' WHERE rekap_id='$rekap_id'";
      mysqli_query($koneksi,$q);
    }
?>