<?php

if(isset($_POST['dangnhap'])){
	$email = $_POST['email'];
	$matkhau= md5($_POST['password']);
	$sql = "SELECT * FROM tbl_dangki WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
	$row=mysqli_query($mysqli,$sql);
	$count = mysqli_num_rows($row);
	if ($count>0) {
		$row_data= mysqli_fetch_array($row);
		$_SESSION['dangki']=$row_data['tenkhachhang'];
		$_SESSION['id_khachhang']=$row_data['id_dangki'];
		header('Location:index.php?quanly=giohang');
	}else{
		echo '<p style="color:red">Tài khoản hoặc mật khẩu không đúng!</p>';
		

	}
}
?>
<style type="text/css">
		body{
			background: #f2f2f2;

		}
		.wapper-login {
             width: 15%;
             margin: 0 auto;
         }
         table.table-login {
             width: 80%;
         }
         table.table-login tr td {
             padding: 5px;
         }
	</style>
<div>
<form action=""  method="post">
	<table border="1" class="table-login" style="text-align: center;border-collapse: collapse;">
		<tr>
			<td colspan="2"><h3>Đăng nhập </h3></td>
		</tr>
		<tr>
			<td>Tài khoản</td>
			<td><input type="text" size="50" name="email" placeholder="Email" ></td>
		</tr>
		<tr>
			<td>Mật khẩu</td>
			<td><input type="password" size="50" name="password" placeholder="Passwords" ></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></input></td>
			
		</tr>
		<tr>

			<td colspan="2"><a href="index.php?quanly=dangki">Đăng kí</a></td>
		</tr>
	</table>
      </form>
</div>