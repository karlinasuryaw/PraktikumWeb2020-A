<!DOCTYPE html>
<html>
<head>
	<?php include('includes/head.php');?>
    <title>Daftar - Pena</title>
<body class="formpena">
	<div class="page-content">
		<div class="formpena-content">
			<div class="form-left">
				<h3>Syarat dan Ketentuan</h3>
				<p>Selamat datang di Web Pena Jurnalistik. Silahkan baca syarat dan ketentuan serta kebijakan privasi kami dengan hati-hati sebelum mengakses dan menggunakan Web Pena Jurnalistik sebagaimana ketentuan tersebut mempengaruhi hak dan kewajiban di bawah hukum.</p>
				<p>Dengan mengakses dan menggunakan website ini berarti Anda memahami dan setuju untuk terikat dan mematuhi semua syarat dan ketentuan serta kebijakan privasi kami. Jika Anda tidak setuju untuk terikat dan mematuhi semua syarat dan ketentuan serta kebijakan privasi kami, jangan mengakses atau menggunakan layanan ini.</p>
				<p>Dengan mengakses dan menggunakan layanan ini berarti Anda menyatakan dan menjamin untuk tunduk pada hukum dan peraturan di wilayah Republik Indonesia dan Anda dengan ini dilarang untuk :</p>
				<br>
				<p>1. Menyinggung, memicu konflik yang melibatkan suku, agama, ras dan hubungan antar kelompok.</p>
				<p>2. Melanggar hukum, mengancam, kasar, melecehkan, memfitnah, mencemarkan, sedang berbohong, curang, atau kebencian pada orang atau kelompok tertentu.</p>
				<p>3. Melanggar atau menyalahi hak orang lain, termasuk tanpa batasan, hak paten, merek dagang, rahasia dagang, hak cipta, publisitas atau hak milik lainnya.</p>
				<p>4. Menganiaya, melecehkan, merendahkan atau mengintimidasi individu atau kelompok individu berdasarkan agama, jenis kelamin, orientasi seksual, ras, etnis, usia atau cacat fisik.</p>
				<p>4. Menganiaya, melecehkan, merendahkan atau mengintimidasi individu atau kelompok individu berdasarkan agama, jenis kelamin, orientasi seksual, ras, etnis, usia atau cacat fisik.</p>
				<p>5. Melanggar norma kesusilaan, cabul, pornografi.</p>
				<p>6. Menganjurkan atau menyarankan tindakan yang melanggar hukum.</p>
				<p>7. Memuat kata-kata atau gambar yang kasar, kotor, jorok, dan sumpah serapah.</p>
				<p>8. Menyebarkan ideologi tertentu atau doktrin yang pada prinsipnya dilarang oleh hukum yang berlaku di wilayah Republik Indonesia.</p>
				<p>9. Menyebarkan file atau program yang berisi virus atau kode komputer lainnya atau file atau program yang merusak, mengganggu atau membatasi fungsi dari software atau hardware komputer atau peralatan komunikasi, atau memperbolehkan penggunaan komputer atau jaringan komputer yang tidak sah.</p>
				<p>10. Melanggar Syarat dan Ketentuan, pedoman atau kebijakan yang ada di Website Pena Jurnalistik.
				<hr>
				<div class="form-check">
					<label for="accept"><input type="checkbox" id="accept" name="accept" value="Accept"> Saya mengerti dan telah Menyetujui Syarat dan Ketentuan yang ada</label><br>
				</div>
			</div>
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Daftar Sebagai Jurnalis</button>
					</div>
				</div>
				<form class="form-detail" action="actdaftar.php" method="post" enctype="multipart/form-data">
					<div class="tabcontent" id="sign-up">
                        <div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="fullname" id="fullname" class="input-text" required>
								<span class="label">Nama Lengkap</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="username" id="username" class="input-text" required>
								<span class="label">Username</span>
		  						<span class="border"></span>
							</label>
                        </div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="email" id="email" class="input-text" required>
								<span class="label">E-Mail</span>
                                <span class="border"></span>
							</label>
                        </div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="phone" id="phone" class="input-text" required>
								<span class="label">No. Telepon/HP</span>
                                <span class="border"></span>
							</label>
						</div>
                        <div class="form-row new">
							<label>Tgl Lahir</label>
							<input type="date" id="birthday" name="birthday" class="input-text" required>
                        </div>
						<div class="form-row new"> 
                            <label for="biography">Biografi & Keahlian Khusus</label>
                            <p><textarea id="biography" name="biography" rows="4" cols="50" required></textarea></p>
                        </div>
                        <div class="form-row new">
							<label>Scan Kartu Identitas Jurnalis</label>
							<p><input type="file" id="iden_jurn" name="iden_jurn" accept="image/x-png,image/gif,image/jpeg" required></p>
						</div>
						<div class="form-row new">
							<label>Foto Profile</label>
							<p><input type="file" id="foto_jurn" name="foto_jurn" accept="image/x-png,image/gif,image/jpeg" required></p>
							<a href="login.php"><legend id="forgot-pass">Sudah Punya Akun? Klik Disini</legend></a>
                        </div>
						<div class="form-row-last">
							<p><input type="submit" name="register" class="register" value="Daftar"></p>
						</div>
                    </div>
                </form>
                </div>
            </div>
        </div>        
	</form>
</body>
</html>