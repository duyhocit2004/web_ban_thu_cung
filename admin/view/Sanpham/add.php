
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
                <h3 class="card-title">thêm sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="?act=them_san_sanpham" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>tên sản phẩm</label>
                    <input type="text" name="ten_san_pham" class="form-control"  placeholder="nhập tên sản phẩm">
                  </div>

                  <div class="form-group">
                    <label>giá</label>
                    <input type="text" name="gia_san_pham" class="form-control"  placeholder="2500000">
                  </div>

                  <div class="form-group">
                    <label>giá khuyến mãi</label>
                    <input type="text" name="gia_khuyen_mai" class="form-control"  placeholder="2000000">
                  </div>

                  <div class="form-group">
                    <label> hình ảnh</label>
                    <input type="file" name="hinh_anh" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">nội dung</label>
                    <input type="text" name="noi_dung" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">lượt xem</label>
                    <input type="text" name="noi_dung" class="form-control">
                  </div>
                  
                  <div class="form-group">
                    <label for="">nội dung</label>
                    <input type="text" name="noi_dung" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">ngày nhập</label>
                    <input type="date" name="noi_dung" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">mô tả</label>
                    <input type="text" name="noi_dung" class="form-control">
                  </div>
                  
                  <div class="form-group">
                    <label for="">nội dung</label>
                    <input type="text" name="noi_dung" class="form-control">
                  </div>

                  <div class="form-group">
                  <label for="">danh mục</label>
                    <select class="form-control" name="" id="">
                      <option  value="">1</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="">mô tả</label>
                    <input type="text" name="noi_dung" class="form-control">
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
