<style>
  .bg {
    background-color: #7E4FA0;
    height: 900px;
  }
  .nav-item2{
    color: white;
    position: relative;
    margin: 10px auto;
  }
  h5{
    padding-top: 20px;
  }
</style>
<!-- navbar samping -->
    <div class="row no-gutter mt-3">
        <div class="bg col-md-2 mt-2 pr-3 pt-5">
            <ul class="nav flex-column ml-3 mb-5">
              <li class="nav-item2">
                <img src="../assets/<?php session_start(); echo $_SESSION['location']; ?>" class="rounded-circle img-thumbnail img-responsive " width=125px >
                <h5><?php echo $_SESSION['username']; ?></h5>
              </li>
              <li class="nav-item">
              <hr class="bg-white">
                <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><br>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="admin.php"><i class="fas fa-users-cog mr-2"></i>Admin</a><br>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="calonjurnalis.php"><i class="fas fa-address-card mr-2"></i>Calon Jurnalis</a><br>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="jurnalis.php"><i class="fas fa-camera-retro mr-2"></i>Jurnalis</a><br>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="berita.php"><i class="fas fa-newspaper mr-2"></i>Berita</a><br>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="profile.php"><i class="fas fa-user-cog mr-2"></i>Profile</a><br>
              </li> 
              <li class="nav-item">
                <a class="nav-link text-white" href="gantipassword.php"><i class="fas fa-key mr-2"></i>Ganti Password</a><br>
              </li> 
            </ul>
      </div>
      <!-- akhir navbar samping -->