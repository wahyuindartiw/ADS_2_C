<?php include "config/koneksi.php" ;
    session_start();
    if (empty($_SESSION['user'])) {
        echo "<center>maaf anda harus <a href='login.php'>login</a> terlebih dahulu</center>";
    }
    else{

?>

<head>
    <link href="layout/styles/bootstrap.min.css" rel="stylesheet">
    <link href="layout/styles/dataTables.bootstrap.css" rel="stylesheet">
    <link href="layout/styles/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="layout/styles/sb-admin.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">

        <div id="page-wrapper">
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Selamat Datang di Panel Admin, silahkan memilih menu dibawah ini.
                            <a class="btn btn-danger" href="logout.php">Logout</a>
                        </div> 
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <center>
                                <a href="http://localhost/SI/pages/pantiAsuhan/dashboard.php" class="btn btn-success" style="margin-right: 20px;">Rincian Donasi Panti Asuhan </a>
                                <a href="http://localhost/SI/pages/pantiJompo/dashboard.php" class="btn btn-warning" style="margin-left: 20px;">Rincian Donasi Panti Jompo </a>
                                        </center>

<!--                             <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Pekerjaan</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">Usia</th>
                                            <th class="text-center">Alasan</th>
                                            <th class="text-center">No Telp</th>
                                            <th class="text-center">Email</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php
                                $no=1;
                                	$sql=mysql_query("select * from adopsi order by 'tgl' DESC");
                                	while($rs=mysql_fetch_array($sql)){
                                ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo"$rs[nama]";  ?></td>
                                            <td ><?php echo"$rs[pekerjaan]";  ?></td>
                                            <td ><?php echo"$rs[alamat]";  ?></td>
                                            <td ><?php echo"$rs[usia]";  ?></td>
                                            <td ><?php echo"$rs[alasan]";  ?></td>
                                            <td ><?php echo"$rs[no_hp]";  ?></td>
                                            <td ><?php echo"$rs[email]";  ?></td>

                                        </tr>
                                <?php
                                }
                                ?>
                                    </tbody>
                                </table>
                            </div>
                            /.table-responsive -->
                         </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </a></td></tr></tbody></table></div></div></div></div></div></div></div></body>
<?php } ?>