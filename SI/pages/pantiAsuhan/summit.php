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
        <li class="active"><a href="http://localhost/SI/pantiAsuhan.php" style="color: red;">PANTI ASUHAN</a></li>
        <li class="active"><a href="http://localhost/SI/pantiJompo.php">PANTI JOMPO</li>
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
        <li class=""><a href="http://localhost/SI/pages/pantiAsuhan/adopsi.php">ADOPSI</a></li>
        <li><a href="../../login.php">LOGIN</a></li>
      </ul>
    </nav>
  </header>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <section>
      <div class="sectiontitle">
        <h6 class="heading">Silahkan Mengisi Rincian Pengeluaran</h6>
      </div>
      <div id="comments">
        <form method="post" role="form" action="http://localhost/si/pages/pantiAsuhan/act_summit.php">
          <input type="text" name="Tanggal Pembelian" placeholder="Tanggal Pembelian" required><br>
          <input type="text" name="Name" placeholder="Nama Barang" required><br>
          <input type="Number" name="Kualitas" placeholder="Qty" required><br>
          <input type="Number" name="Harga" placeholder="Harga Barang" required>
          <p><button type="submit">Summit</button></p>
        </form>
      </div>
    </section>
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