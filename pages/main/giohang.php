<?php
//session_start();

?>
<p>Giỏ hàng
  <?php
  if (isset($_SESSION['dangki'])) {
    echo 'xin chào '.'<span style="color:red">'.$_SESSION['dangki'].'</span>';
    
  }

  ?>
</p>  
<?php
if (isset($_SESSION['cart'])) {
	
}
?>

<table style="width: 100%;text-align: center;border-collapse: collapse;" border="1">
  <tr>
    <th>Id</th>
	<th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
	<th>Đơn giá</th>
  <th>thành tiền </th>
  <th>Quản lý</th>
	
  </tr>
  <?php
  if(isset($_SESSION['cart'])){
  	$i=0;
    $tongtien=0;
  	foreach($_SESSION['cart'] as $cart_item){
      $thanhtien=$cart_item['soluong']* $cart_item['giasp'];
      $tongtien=$tongtien+$thanhtien;
  		$i++;


  ?>
  <tr>
    <td><?php echo $i; ?> </td>
    <td><?php echo $cart_item['masp']; ?></td>
    <td><?php echo $cart_item['tensanpham']; ?></td>
	<td><img src="../admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?> " width="150px"></td>
	<td>
    <a href="../pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fas fa-plus fa-style"></i></a>
    <?php echo $cart_item['soluong']; ?>
    <a href="../pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fas fa-minus fa-style"></i></a>
      
    </td>
	<td><?php echo number_format($cart_item['giasp'],0,',','.').'VND'; ?></td>
  <td><?php echo number_format($thanhtien,0,',','.').'VND';?></td>
  <td><a href="../pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></td>
  </tr>
  <?php
}
?>
<tr>
  <td colspan="8">
    <p style="float: left;">Tổng tiền :<?php echo number_format($tongtien,0,',','.').'VND';?></p><br>
    <p style="float: right;"><a href="../pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a></p>
    <div style="clear:both;"></div>
    <?php
    if (isset($_SESSION['dangki'])) {
    ?>
     <p><a href="main/thanhtoan.php">Đặt hàng</a></p>
    <?php
     }else{
    ?>
    <p><a href="index.php?quanly=dangki">Đăng kí để đặt hàng</a></p>
    <?php 
     }
     ?>
    
   
  </td>
</tr>
<?php 
  }else{
	?>
	<tr>
	<td colspan='8'><p>Hiện tại giỏ hàng trống</p></td>
	</tr>
	<?php
}
	?>
</table>
