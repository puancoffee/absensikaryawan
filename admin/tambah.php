
    <?php
  include 'koneksi.php';

  if (isset($_POST['upload'])) {
  	$image = $_FILES['image']['name'];
      $karyawan = mysqli_real_escape_string($koneksi, $_POST['karyawan']);
      $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);

  	$target = "file/".basename($image);

  	$sql = "INSERT INTO absensi (image, karyawan, tanggal) VALUES ('$image', '$karyawan', '$tanggal')";
  	mysqli_query($koneksi, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($koneksi, "SELECT * FROM absensi");
  header("location:index.php");
?>