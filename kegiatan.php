<!-- Header -->
<?php include "template/header.php"; ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include "template/navbar.php"; ?>

  <!-- Sidebar -->
  <?php include "template/sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Kegiatan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Kegiatan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12">
            <!-- general form elements -->
            <p><a href="tambah.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a></p>
            <div class="card">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td>Nomor</td>
                    <td>Nama Kegiatan</td>
                    <td>Tanggal Kegiatan</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    include "koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT * FROM kegiatan");

                    $no = 1;
                    while($data = mysqli_fetch_object($sql))
                    {
                  ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data->nama_kegiatan ?></td>
                      <td><?php echo $data->tgl_kegiatan ?></td>
                      <td>
                        <a class="btn btn-sm btn-warning" href="ubah.php?id_kegiatan=<?php echo $data->id_kegiatan ?>"><i class="fa fa-pencil-alt"></i> Ubah</a>  
                        <a class="btn btn-sm btn-danger" href="hapus.php?id_kegiatan=<?php echo $data->id_kegiatan ?>"><i class="fa fa-trash"></i> Hapus</a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?php include "template/footer.php"; ?>

</div>
<!-- ./wrapper -->

<!-- JS -->
<?php include "template/js.php"; ?>

</body>
</html>