<?php 
//session_start();
if (isset($_POST['dangki'])) {
	$hovaten=$_POST['hovaten'];
	$email =$_POST['email'];
	$dienthoai=$_POST['dienthoai'];
	$diachi=$_POST['diachi'];
	$matkhau=md5($_POST['matkhau']);
	$sql="INSERT INTO tbl_dangki(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$hovaten."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')";
	$sql_dangki=mysqli_query($mysqli,$sql);
	if($sql_dangki){
		echo '<p style="color:green">Bạn đã đăng kí thành công</p>';
		$_SESSION['dangki']=$hovaten;
		$_SESSION['id_khachhang']=mysqli_insert_id($mysqli);
		
		header('Location:index.php?quanly=giohang');
	}


}





 ?>
<p>Đăng kí thành viên</p>
<style type="text/css">
	.dangki tr td{
		padding: 5px;
	}

</style>
<form method="POST" action=""><table class="dangki" border="1" width="50%" style="border-collapse: collapse;">
	<tr>
		<td>Họ và tên</td>
		<td><input type="text" size="50" name="hovaten"></td>
	</tr>

	<tr>
		<td>Email</td>
		<td><input type="text" size="50" name="email"></td>
	</tr>

	<tr>
		<td>Điện thoại</td>
		<td><input type="text" size="50" name="dienthoai"></td>
	</tr>

	<tr>
		<td>Địa chỉ</td>
		<td><input type="text" size="50" name="diachi"></td>
	</tr>

	<tr>
		<td>Mât khẩu</td>
		<td><input  type="text" size="50" name="matkhau"></td>
	</tr>

	<tr>
		<td><input type="submit" name="dangki" value="Đăng kí"></td>
		<td><a href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a></td>

	</tr>
</table>
</form>