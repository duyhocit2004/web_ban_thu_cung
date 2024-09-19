<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
        <th>ten_san_pham</th>
        <th>gia_khuyen_mai</th>
        <th>hinh_anh</th>
        <th>so_luong</th>
        <th>luot_xem</th>
        <th>ngay_nhap</th>
        <th>danh_muc_id</th>
        <th>trang_thai</th>
    </tr>
    <?php foreach ($listproduct as $as):?>
        <tr>
            <td><?php echo $as['ten_san_pham']?></td>
            <td><?php echo $as['gia_khuyen_mai']?></td>
            <td><?php echo $as['hinh_anh']?></td>
            <td><?php echo $as['so_luong']?></td>
            <td><?php echo $as['luot_xem']?></td>
            <td><?php echo $as['ngay_nhap']?></td>
            <td><?php echo $as['danh_muc_id'] ?></td>
            <td><?php echo $as['trang_thai']?></td>
        </tr>
    <?php endforeach ; ?>
    </table>
</body>
</html>