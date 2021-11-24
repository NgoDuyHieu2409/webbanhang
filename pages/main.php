<div class="main">
			<?php
			require_once("sidebar/sidebar.php")
			?>

			<div class="maincontent">
				<?php
				if (isset($_GET['quanly'])) {
					$tam= $_GET['quanly'];
				}
				else{
					$tam='';
				}
				if ($tam=='danhmucsanpham') {
					require_once('main/danhmuc.php');
				}
				elseif($tam=='giohang'){
					require_once('main/giohang.php');
				}
				elseif($tam=='tintuc'){
					require_once('main/tintuc.php');
				}
				elseif($tam=='lienhe'){
					require_once('main/lienhe.php');
				}
				elseif($tam=='sanpham'){
					require_once('main/sanpham.php');
				}
				elseif($tam=='dangki'){
					require_once('main/dangki.php');
				}elseif($tam=='thanhtoan'){
					require_once('main/thanhtoan.php');
				}elseif($tam=='dangnhap'){
					require_once('main/dangnhap.php');
				}elseif($tam=='timkiem'){
					require_once('main/timkiem.php');
				}elseif($tam=='camon'){
					require_once('main/camon.php');
				}
				elseif($tam=='thaydoimatkhau'){
					require_once('main/thaydoimatkhau.php');
				}else{
					require_once('main/index.php');
				}

				?>
			</div>
		</div>