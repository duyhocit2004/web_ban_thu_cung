
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../admin/view/playout/head.php' ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->

    <?php require_once '../admin/view/playout/nav.php'?>
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
  <?php require_once '../admin/view/playout/sidebar.php'?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sản phẩm</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="?act=form-them-danhmuc">
                  <button class="btn btn-success">thêm danh mục</button>
                   <!-- thêm sản phẩm -->
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>tên danh mục</th>
                    <th>mô tả</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($list as $key => $as): ?>
                  <tr>
                    <td><?=$key + 1?></td>
                    <td><?=$as['ten_danh_muc']?></td>
                    <td><?=$as['mo_ta']?></td>
                    <td>
                      <a href="<?= '?act=form-sua-danhmuc&id='.$as['id']?>" class="btn btn-primary">sửa</a>
                      <a href="" class="btn btn-danger">xóa</a>
                    </td>
                  </tr>
                  <?php endforeach ; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <?php require_once '../admin/view/playout/card_header.php'?>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php require_once '../admin/view/playout/footer.php'?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php require_once '../admin/view/playout/js.php'?>

</script>
</body>
</html>
