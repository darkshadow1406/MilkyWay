<!DOCTYPE html>
<html lang="en">

<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/css/main.css">
	<!--===============================================================================================-->
	<style>
		.eye {
			position: absolute;
			right: 15px;
			top: 50%;
			transform: translateY(-50%);
			cursor: pointer;
			max-width: 17px;
			color: #fff;
		}

		.hidden {
			display: none;
		}
	</style>
</head>

<body>

	<!-- CODE XỬ LÝ PHP -->
	<?php
	$lifetime = 60 * 60 * 24 * 365;
	session_set_cookie_params($lifetime, '/');
	session_start();

	require_once('../admin/dao/khach-hang.php');

	extract($_REQUEST);
	if (array_key_exists('btn_login', $_REQUEST)) {
		$user = khach_hang_select_by_id($ma_kh);
		if ($user) {
			if ($user['mat_khau'] == $mat_khau) {
				if ($user['vai_tro'] == 1) {
					$_SESSION['user'] = $user;
					header("location: ../index.php");
				}
				if ($user['vai_tro'] == 0) {
					$_SESSION['user'] = $user;
					header("location: ../index.php");
				}
			}
		} else {
			echo '<script language="javascript">';
			echo 'alert("Sai tên tài khoản hoặc mật khẩu")';
			echo '</script>';
		}
	}
	?>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../css/tai-khoan/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-logo">
						<a href="../index.php"><img src="../css/tai-khoan/images/logo12.jpg" width="80px" alt=""></a>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						ĐĂNG NHẬP
					</span>

					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="ma_kh" placeholder="Tên đăng nhập">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100 input" type="password" name="mat_khau" placeholder="Mật khẩu">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="eye eye-open hidden">
							<path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="eye eye-close">
							<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
							<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
						</svg>



					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1" checked>
							Ghi nhớ mật khẩu ?
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="btn_login">
							XÁC NHẬN
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="dang-ky.php">
							Đăng ký?&nbsp;
						</a>
						OR
						<a class="txt1" href="quen-mk.php">
							&nbsp;Quên mật khẩu?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="../css/tai-khoan/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="../css/tai-khoan/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="../css/tai-khoan/vendor/bootstrap/js/popper.js"></script>
	<script src="../css/tai-khoan/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="../css/tai-khoan/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="../css/tai-khoan/vendor/daterangepicker/moment.min.js"></script>
	<script src="../css/tai-khoan/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="../css/tai-khoan/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="../css/tai-khoan/js/main.js"></script>
	<script>
		const input = document.querySelector(".input");

		const eyeOpen = document.querySelector(".eye-open");

		const eyeclose = document.querySelector(".eye-close");

		eyeOpen.addEventListener("click", function() {
			eyeOpen.classList.add("hidden");
			eyeclose.classList.remove("hidden");
			input.setAttribute("type", "password")
		});

		eyeclose.addEventListener("click", function() {
			eyeOpen.classList.remove("hidden");
			eyeclose.classList.add("hidden");
			input.setAttribute("type", "text")
		});
	</script>
</body>

</html>