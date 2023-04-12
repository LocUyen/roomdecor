
<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;
// instantiate and use the dompdf class
$dompdf = new Dompdf();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
    body{
        font-family: DejaVu Sans, sans-serif;
    }
table {
  /* font-family: arial, sans-serif; */
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
/* @font-face {
  font-family: 'BeVietnam';
  src: url('vendor/dompdf/dompdf/lib/BeVietnam-Bold.ttf');
} */
</style>
</head>
<body>

<h2 style="text-align: center ;">Hóa đơn</h2>
<p>Mã đơn nhập: <?php echo $get_import_good_by_id['import_id']; ?></p>
<p>Nhà cung cấp: <strong><?php echo $get_import_good_by_id['supplier_name']; ?></strong></p>
<p>Ngày nhập hàng: <?php echo $get_import_good_by_id['import_date']; ?></p>
<p>Tình trạng đơn: <?php echo $get_import_good_by_id['import_status']; ?></p>
<p>Tổng tiền: <strong><?php echo currency_format($get_import_good_by_id['import_total']); ?></strong></p>

<table>
  <tr>
    <th>STT</th>
    <th>Tên sản phẩm</th>
    <th>Đơn giá</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
  </tr>
  <?php 
    $t=0;
    foreach($get_import_detail_by_id as $item){
    $t++;
    ?>
  <tr>
    <td><?php echo $t; ?></td>
    <td><?php echo $item['product_title']; ?></td>
    <td><?php echo currency_format($item['import_price']); ?></td>
    <td><?php echo $item['import_quality']; ?></td>
    <td><?php echo currency_format($item['import_quality']*$item['import_price']); ?></td>
  </tr>
  <?php } ?>
</table>
<p>  </p>
<div style="float: left ;">
  <p style="margin-left:20px;">Người mua hàng</p>
  <p style="margin-left:20px;">(Kí và ghi rõ họ tên)</p>
</div>
<div style="float:right ;">
  <p style="margin-left:20px;">Người bán hàng</p>
  <p style="margin-left:20px;">(Kí và ghi rõ họ tên)</p>
</div>


</body>
</html>



<?php
$html = ob_get_clean();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>