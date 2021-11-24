<?php 
$sql_lietke= "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
$query_lietke= mysqli_query($mysqli,$sql_lietke);
 ?>
<p>liêt kê danh mục sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
 <!--<form method="post" action="modules/quanlydanhmucsp/xuly.php">-->
  <tr>
  	<th>ID</th>
   <th>Tên danh mục</th>
   <th>Thứ tự</th>
  </tr>
  <?php
 $i=0;
 while ($row= mysqli_fetch_array($query_lietke)) {
 	$i++;
 
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td>
    	<a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> | <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
    </td>
  </tr>
  <?php
}
   ?>

 <!--</form>-->
  
</table>