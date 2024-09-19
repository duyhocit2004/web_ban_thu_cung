
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
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">sửa sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?='?act=sua-danhmuc&id='.$list['id'] ?>"method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>tên danh mục</label>
                    <input type="text" name="ten_danh_muc" value="<?=$list['ten_danh_muc']?>" class="form-control"  placeholder="tên danh mục">
                  </div>

                  <div class="form-group">
                    <label>mô tả</label>
                    <textarea name="mo_ta" class="form-control" name="" id=""><?=$list['mo_ta']?></textarea>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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
