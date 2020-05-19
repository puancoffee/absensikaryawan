<!DOCTYPE html>
<html>
<head>
	<title>SISTEM ABSENSI KARYAWAN</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="app">
    <div id="sidenav">
      <div class="wrapper">
        <div class="logo">
          <a href="#">SELAMAT DATANG</a>
          <a href="#" class="nav-icon pull-right"><i class="fa fa-bars"></i></a>
        </div>
        <div class="menu">
          <ul>
			
            <!-- If login as admin -->
            <li>
              <a  href="#">DASHBOARD</a>
                <ul>
                  <li><a href="index.php">MASUKKAN DATA</a></li>
                  <li><a href="lihat.php">LIHAT DATA</a></li>
                  <li  class='active'><a href="terlambat.php">TERLAMBAT</a></li>
                  <li><a href="bermasalah.php">BERMASALAH</a></li>
                  <li><a href="laporan_bermasalah.php">LAPORAN BERMASALAH</a></li>
                  <li><a href="catatan.php">CATATAN KHUSUS KARYAWAN</a></li>
				  <li><a href="catatan_pesan.php">PESAN DARI KARYAWAN</a></li>
                </ul>
            </li>
            <li><a href="logout.php" class="logout">LOGOUT</a></li>
          </ul>
        </div>
		<div>
		
		</div>
      </div>
    </div>
	<div class='container'>
	<div class="global-container">
	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">LIHAT DATA TERLAMBAT</h3>
		<div class="card-text">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jam</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
  <?php  
  include_once("koneksi.php");

  // mengambil data dari database
  $result = mysqli_query($koneksi, "SELECT  * FROM absensi  WHERE TIME(`jam`) >= '09:00:00' ORDER BY id DESC" );
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['karyawan']."</td>";
        echo "<td>".$user_data['tanggal']."</td>";   
        echo "<td>".$user_data['jam']."</td>";  
        echo "<td><img width='30px' src='file/".$user_data['image']."' ></td>";
        echo "</tr>";    
    }
    ?>
  </tbody>
</table>
		</div>
	</div>
</div>
</div></div>
  </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
