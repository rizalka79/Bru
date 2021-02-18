<?php
  $kon_id = $_GET['kon_id'];
  $query  = mysqli_query($koneksi,"SELECT * FROM tb_kon WHERE kon_id='$kon_id'");
  $data   = mysqli_fetch_array($query);
?>

<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</head>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<div class="col-md-12" style="padding-top: 40px">
<div class="box" style="">
            <div class="box-header">
        
    <div class="col-xs-12 col-md-8">
      <h3><span class="fa fa-database"></span>
        Data Pegawai Covid
    </h3>
    </div>
  </div>
  <section class="content">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Cari Data Pegawai</h3>
        </div>
        <div class="box-body ">
          <div class="row">
            <div class="col-md-12">
              <form method="POST">

              <div class="form-group" >
                  <label>Nama Pegawai</label> <br>
                  <select  class="form-control my-colorpicker1 myselect" name="kon_peg_nik" required="required" id="kon_peg_nik" onchange="otomatis()">
                    <option class="form-control form-control my-colorpicker1 select2" style=""></option>
                    <?php
                      $sql = $koneksi->query("SELECT * FROM tb_peg");
                        while ($data=$sql->fetch_assoc()) {
                    ?>
                        <option class="form-control" value="<?php echo $data['peg_nik']; ?>"><?php echo $data['peg_nik']." - ".$data['peg_nama']; ?></option>
                    <?php 
                      } 
                    ?>
                  </select>
                </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////   -->                    
                  <input name="fsimpan" type="submit"  class="btn btn-sm btn-primary" value="Cari">           
              </form>
              <?php 
                if (isset($_POST['fsimpan'])) {


                  $kon_chosen       = $_POST['kon_peg_nik'];
              ?>
                <script type="text/javascript">
                  document.location.href="?menu=zpeg_data2&zpeg_nik=<?php echo $kon_chosen; ?>";
                </script>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
<script type="text/javascript">
            function otomatis(){
                var kon_peg_nik = $("#kon_peg_nik").val();
                $.ajax({
                    url: 'otomatis.php',
                    data:"kon_peg_nik="+kon_peg_nik ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#peg_jk').val(obj.peg_jk);
                    $('#peg_tgllahir').val(obj.peg_tgllahir);
                    $('#peg_nip').val(obj.peg_nip);
                    $('#peg_nik').val(obj.peg_nik);
                    $('#peg_stapeg').val(obj.peg_stapeg);
                    $('#peg_org').val(obj.peg_org);
                    $('#peg_orgunit').val(obj.peg_orgunit);
               });
            }
        </script>
<script type="text/javascript">
      $(".myselect").select2();
</script>