<?php
require_once("admin/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
<div class="topnav">
<a href="index.php">Home</a>
  <a href="news_bisnis.php">Bisnis</a>
  <a class="" href="news_ekonomi.php">Ekonomi</a>
  <a class="active" href="news_internasional.php">Internasional</a>
  <a href="news_movie.php">Movie</a>
  <a href="news_teknologi.php">Teknologi</a>
  <div class="search-container">
    <form method="POST" action="searchPost.php?page=search">
    <input type="text" name="kata" placeholder="Search..">
      <button type="submit" name="cari">Search</button>
    </form>
  </div>
</div>

<div class="container">
<table>
<?php
    $sql = "SELECT * FROM berita WHERE kategori='Internasional' ORDER BY id_berita DESC ";
    $stmt = $db -> prepare($sql);
    $stmt -> execute();
    $data = $stmt -> rowCount();
    if($data==0){
        echo "tidak ada berita";
    }else{
        while($data = $stmt -> fetch(PDO::FETCH_ASSOC)){
            ?>
            <h2><a href="detailberita.php?detail=<?php echo $data['id_berita']; ?>"><?php echo $data['judul_berita'];?></a></h2>
            <p><?php echo $data['tanggal'];?></p>
            <p><?php echo $data['kategori'];?></p>
            <img width="500px"; height="300px"; src="../img/<?php echo $data['gambar'];?>"/>
            <p><?php echo substr($data['isi_berita'],0,250); ?></p>
            <a href="detailberita.php?detail=<?php echo $data['id_berita']; ?>">Read More</a>
            <hr>
            <?php
        }
    }
    ?>
</table>
</div>
</body>
</html>