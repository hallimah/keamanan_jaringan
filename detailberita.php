<?php
 require_once("admin/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Berita</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
<div class="topnav">
<a href="index.php">Home</a>
  <a href="news_bisnis.php">Bisnis</a>
  <a class="" href="news_ekonomi.php">Ekonomi</a>
  <a href="news_internasional.php">Internasional</a>
  <a href="news_movie.php">Movie</a>
  <a href="news_teknologi.php">Teknologi</a>
  <div class="search-container">
    <form action="" method="POST">
      <input type="text" name="kata" placeholder="Search..">
      <button type="submit" name="cari">Search</button>
    </form>
  </div>
</div>
<br>
<br>
<br>
    <div class="container">
    <?php
    $id = $_GET['detail'];
    if(isset($_GET['detail'])){
        $sql = "SELECT * FROM berita WHERE id_berita = '$id' ";
        $stmt = $db -> prepare($sql);
        $stmt -> execute();
        $data = $stmt -> rowCount();
        
        while($data = $stmt -> fetch(PDO::FETCH_ASSOC)){ ?>
            <h2><?php echo $data['judul_berita']; ?></h2>
            <p><?php echo $data['tanggal'];?></p>
            <p><?php echo $data['kategori'];?></p>
            <img width="500px"; height="300px"; src="img/<?php echo $data['gambar'];?>"/>
            <p><?php echo $data['isi_berita']; ?></p>

            <?php include 'komen.php' ?>
    <?php
        }
    }
    ?>        
    </div>

</body>
</html>