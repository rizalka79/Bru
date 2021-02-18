<?php
  include "inc/koneksi.php";
  session_start();
  if(@$_SESSION['userweb'] != ""){
    if($_SESSION['level']="Super"){
      header('location:page/index.php');
    }
    else if($_SESSION['userweb']="Admin"){
      header('location:page/index.php');  
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
    <link rel="stylesheet" href="loginproperty/a.css">   
    <title>Rekap Pegawai COVID19 | Kementerian Kesehatan</title>
    <link rel="icon" type="image/png" href="loginproperty/kmk.png">
  
    
  </head>
  <body>
    
    <section class="Form my-5 mx-5">
        <div class="container" style="width: 1000px">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="loginproperty/b.png" class="img-fluid pt-5" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <img src="loginproperty/kmk.png" alt="" style="width: 80px; height: 80px;" class="float-sm-right kmk">
                    <h1 class="font-weight-bold ">Kementerian Kesehatan</h1>
                    <h4 class="mb-4">Rekap Pegawai dan Keluarga COVID-19</h4>
                    <form action="" method="post">
                        <div class="form-row">
                             <div class="col-lg-7">
                                <input type="text" class="form-control mt-2" placeholder="Your Username" name="user">
                            </div>
                        </div>
                        <div class="form-row pt-2">
                            <div class="col-lg-7">
                                <input type="password" class="form-control my-3 p-2 mb-2" placeholder="Password" name="pass">
                                </div>
                            </div>
                        <div class="form-row pt-2 mb-3">
                            <div class="form-group ml-1" style="width: 180px;">
                                <input type="text" class="form-control" id="textinput" placeholder="Capcha" name="captcha">
                            </div>
                            
                            <div class="form-group ml-2" style="width: 100px;">
                            <img src="loginproperty/c3.php">
                            </div>
    <?php
  if(isset($_POST['flogin'])){
    $captcha = $_POST['captcha'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if($_SESSION['captcha'] == $captcha){
      // echo "<center><label class='text-success'>Login successfully</label></center>";
      $qlogin = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE user_name ='$user' AND user_pass=md5('$pass')");
      $cek = mysqli_num_rows($qlogin);
      $data = mysqli_fetch_array($qlogin);
  
  
      $status=1;
  
      if($cek < 1){
        ?>
        <h6 class='text-danger ml-2'>Username atau Password Salah!</h6>
        <?php
      }
      else {
         if($status==""){
          ?>
          <br>
          <div class="alert alert-danger">
          Anda tidak boleh login, username anda nonaktif
          </div>
          <?php
         }
         else if($status!=""){
            $_SESSION['userweb']=$data['user_id'];
          if ($data['user_akses']=="Super") {
            $_SESSION['level']="Super";
            header('location:page/index.php');
          }
          else if ($data['user_akses']=="Admin") {
            $_SESSION['level']="Admin";
            header('location:page/index.php');
          }
         }
      }
    }else{
      echo "<center><label class='text-danger'>Invalid captcha!</label></center>";
    }
  }
  ?>                        
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                              <button type="submit" class="btn1 mb-5" name="flogin" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </section>  

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>