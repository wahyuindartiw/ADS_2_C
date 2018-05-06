<?php include "../../config/koneksi.php" ;
    session_start();
    if (empty($_SESSION['user'])) {
        echo "<center>maaf anda harus <a href='login.php'>login</a> terlebih dahulu</center>";
    }
    else{

?>

<!DOCTYPE html>
<html lang="">

<head>
<title>Sistem Informasi Panti Asuhan dan Panti Jompo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <div class="fl_left">
      <ul class="nospace">
        <li><a href="http://localhost/SI/"><i class="fa fa-lg fa-home"></i></a></li>
        <li class="active"><a href="http://localhost/SI/pantiAsuhan.php">PANTI ASUHAN</a></li>
        <li class="active"><a href="http://localhost/SI/pantiJompo.php" style="color: red;">PANTI JOMPO</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> (0341) 412266</li>
        <li><i class="fa fa-envelope-o"></i> dinsos@malangkota.go.id</li>
      </ul>
    </div>
  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="#"></a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li><a href="http://localhost/SI/pages/pantiAsuhan/berita.php">BERITA</a></li>
        <li><a href="http://localhost/SI/pages/pantiAsuhan/daftarpanti.php">DAFTAR PANTI</a></li>
        <li><a href="http://localhost/SI/pages/pantiAsuhan/galeri.php">GALERI</a></li>
        <li class="#"><a href="http://localhost/SI/pages/pantiAsuhan/adopsi.php">ADOPSI</a></li>
        <li><a href="../../login.php">LOGIN</a></li>
      </ul>
    </nav>
  </header>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <section>
      <div class="sectiontitle">
        <h6 class="heading">RINCIAN PENGELUARAN PANTI JOMPO</h6>
      </div>
    </section>
           <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                  <tr>
                      <th class="text-center">Nama Panti Asuhan</th>
                      <th class="text-center">Tanggal Pembelian</th>
                      <th class="text-center">Nama Barang</th>
                      <th class="text-center">Jumlah Barang</th>
                      <th class="text-center">Total Harga</th>
                  </tr>
              </thead>
              <tbody>
          <?php
          $no=1;
            $sql=mysql_query("SELECT * FROM `submitpj` ORDER BY `submitpj`.`panti` ASC");
            while($rs=mysql_fetch_array($sql)){
          ?>
                  <tr class="odd gradeX">
                      <td><?php echo"$rs[panti]";  ?></td>
                      <td ><?php echo"$rs[tgl]";  ?></td>
                      <td ><?php echo"$rs[nama_barang]";  ?></td>
                      <td ><?php echo"$rs[qty]";  ?></td>
                      <td ><?php echo"$rs[harga]";  ?></td>

                  </tr>
          <?php
          }
          ?>
              </tbody>
          </table>
      </div>
          
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- Footer Background Image Wrapper -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
<?php } ?>