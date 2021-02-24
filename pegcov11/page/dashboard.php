<script src="../inc/Chart.js"></script>

<div class="row" style="padding-left: 60px !important; margin-top: 10px !important;">
        <!-- Left col -->
        <section class="col-lg-7">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
           
            <div class="main__container">
          <!-- MAIN TITLE STARTS HERE -->

          <div class="main__title">
            <img src="hallo.png" alt="" />
            <div class="main__greeting">
              <h1>Kementerian Kesehatan</h1>
              <p style="font-size: 22px">Rekap Pegawai dan Keluarga Covid19</p>
            </div>
          </div>
</section>
<section class="col-lg-4" style="margin-top: 6px !important;">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
          <div class="small-box bg-green" style="background-color: #42a64e !important;">
            <div class="inner">
              <h3>50.100</h3>
              <p>Jumlah Pegawai<br>
              <?php
                  if ($profil['user_akses']!="Super"){
                    echo $profil['user_org']." - ".$profil['user_orgsat'];
                  } 
              ?></p>
            </div>
            <div class="icon">
              <i class="ion-ios-people"></i>
            </div>
<?php if ($profil['user_akses']!="Umum"){ ?>          
            <a href="?menu=peg_data" class="small-box-footer">Detail Pegawai <i class="fa fa-arrow-circle-right"></i></a>
<?php } ?>
          </div>
</div>
</section>
</div>
<div class="row">
<section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua" style="background-color: #d15824 !important;"><i class="ion-ios-medkit"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pegawai COVID19</span>
              <span class="info-box-number">558</span>
            </div>
           </div>
          </div>
      
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red" style="background-color: #2b8a74 !important;"><i class="ion-ios-body"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pegawai Sembuh</span>
              <span class="info-box-number">500</span>
              </div>
           </div>
          </div>

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green" style="background-color: #d15824 !important;"><i class="ion-person-stalker"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Keluarga COVID19</span>
              <span class="info-box-number">215</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow" style="background-color: #2b8a74 !important;"><i class="ion-android-contacts"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Keluarga Sembuh</span>
              <span class="info-box-number">210</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

<h3 style="margin-top: 30px;">Rincian Pegawai Kementerian Kesehatan
<?php if ($profil['user_akses']!="Umum"){ ?>
<a  href="?menu=peg_data" 
          class="btn btn-sm btn-success" style="background-color: #42a64e !important;">Detail Data
        </a> 
<?php } ?>        
</h3>

      <div class="row" style="margin-top: 20px !important;">
        <section class="col-lg-4">
        <?php
         include "chart/based_month.php";
         ?>

</section>
<section class="col-lg-4">
        <?php
         include "chart/based_condition.php";
         ?>

</section>
<section class="col-lg-4">
        <?php
         include "chart/based_final.php";
         ?>   

</section>
</div>
<h3 style="margin-top: 10px;">Profil Positif COVID19
<?php if ($profil['user_akses']!="Umum"){ ?>  
<a  href="?menu=peg_data" 
          class="btn btn-sm btn-success" style="background-color: #42a64e !important;">Detail Data
        </a> 
<?php } ?>        
</h3>
<div class="row" style="margin-top: 20px !important;">
        <section class="col-lg-6">
        <?php
         include "chart/top1.php";
         ?> 

</section>
<section class="col-lg-6">
         <?php
         include "chart/top2.php";
         ?> 
</div>
</div>

<!-- TREN PERMINGGU -->
<!-- <h3 style="margin-top: 10px;">Tren Per Minggu Pegawai COVID19</h3>
<div class="row" style="margin-top: 20px !important;">
        <section class="col-lg-6">
        <?php
         include "chart/top1.php";
         ?> 

</section>
<section class="col-lg-6">
         <?php
         include "chart/top2.php";
         ?> 
</div>
</div> -->
  <!-- DATA KELUARGA -->

<h3 style="margin-top: 30px;">Rincian Keluarga Pegawai Kementerian Kesehatan
<?php if ($profil['user_akses']!="Umum"){ ?>    
<a  href="?menu=vkel_data" 
          class="btn btn-sm btn-success" style="background-color: #42a64e !important;">Detail Data
        </a> 
<?php } ?>           
</h3>
      <div class="row" style="margin-top: 20px !important;">
        <section class="col-lg-4">
        <?php
         include "chart/based_month_fm.php";
         ?>

</section>
<section class="col-lg-4">
        <?php
         include "chart/based_condition_fm.php";
         ?>

</section>
<section class="col-lg-4">
        <?php
         include "chart/based_final_fm.php";
         ?>   

</section>
</div>
<h3 style="margin-top: 10px;">Profil Positif COVID19
<?php if ($profil['user_akses']!="Umum"){ ?>    
<a  href="?menu=vkel_data" 
          class="btn btn-sm btn-success" style="background-color: #42a64e !important;">Detail Data
        </a> 
<?php } ?>        
</h3>
<div class="row" style="margin-top: 20px !important;">
        <section class="col-lg-6">
        <?php
         include "chart/top1_fm.php";
         ?> 

</section>
<section class="col-lg-6">
         <?php
         include "chart/top2_fm.php";
         ?> 
</div>
</div>
</section>
</div>