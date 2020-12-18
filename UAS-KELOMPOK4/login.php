<!DOCTYPE html>
<html>
<head>
	<?php include('includes/head.php');?>
    <title>Login Jurnalis</title>
<body class="formpena">
<?php 
	//pesan error saat username/password kosong/tidak sesuai
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<script>alert('Username & Password Salah!');location='login.php';</script>";
		}
	}
	?>
	<div class="page-content">
		<div class="formpena-content">
            <div class="form-left">
                <img src="assets/img/jurnalis.jpg" alt="" width="400px">
			</div>
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Login Jurnalis</button>
					</div>
				</div>
				<form class="form-detail" action="cek_login.php" method="post">
					<div class="tabcontent" id="sign-up">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="username" id="email" class="input-text" required>
								<span class="label">Username</span>
                                <span class="border"></span>
							</label>
                        </div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
								<a href="daftar.php"><legend id="forgot-pass">Belum Punya Akun? Klik Disini</legend></a>
							</label>
						</div>
						<div class="form-row-last">
							<p><input type="submit" name="masuk" class="masuk" value="Login"></p>
						</div>
                    </div>
                </form>
                </div>
            </div>
        </div>        
	</form>
</body>
</html>