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
            <h1 class="m-0 text-dark">Tambah Data Kegiatan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Kegiatan</li>
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
          <div class="col-lg-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Kegiatan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="tambah_proses.php">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="nama_kegiatan">Nama Kegiatan</label>
                        <input name="nama_kegiatan" type="text" class="form-control" required placeholder="Isi nama kegiatan">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="tgl_kegiatan">Tanggal Kegiatan</label>
                        <input name="tgl_kegiatan" type="date" class="form-control" required placeholder="Isi tanggal kegiatan">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                  <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                </div>              
              </form>
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