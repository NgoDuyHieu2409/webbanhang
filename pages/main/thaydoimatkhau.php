<?php

if(isset($_POST['doimatkhau'])){
	$taikhoan = $_POST['email'];
	$matkhau_cu= md5($_POST['password_cu']);
	$matkhau_moi= md5($_POST['password_moi']);
	$sql = "SELECT * FROM tbl_dangki WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
	$row=mysqli_query($mysqli,$sql);
	$count = mysqli_num_rows($row);
	if ($count>0) {
		$sql_update= mysqli_query($mysqli,"UPDATE tbl_dangki SET matkhau ='".$matkhau_moi."'");
		echo '<p style="color:green;">Tài khoản mật khẩu đã thay đổi!</p>';
	}else{
		echo '<p style="color:red;">Tài khoản hoặc mật khẩu cũ không đúng!</p>';
		

	}
}

?>

<form action="" autocomplete="off" method="post">
	<table border="1" class="table-login" style="text-align: center;border-collapse: collapse;">
		<tr>
			<td colspan="2"><h3>Đổi mật khẩu</h3></td>
		</tr>
		<tr>
			<td>Tài khoản</td>
			<td><input type="text" name="email" ></td>
		</tr>
		<tr>
			<td>Mật khẩu cũ</td>
			<td><input type="text" name="password_cu" ></td>
		</tr>
		<tr>
			<td>Mật khẩu mới</td>
			<td><input type="text" name="password_moi" ></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="doimatkhau" value="Đổi mât khẩu"></input></td>
		</tr>
	</table>
      </form>