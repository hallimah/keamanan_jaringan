<br><br>
<?php
 require_once("admin/db.php");
 $id = $_GET['detail'];
 $sql = "SELECT * FROM komentar WHERE id_berita = '$id' ";
 $stmt = $db -> prepare($sql);
 $stmt -> execute();
 $data = $stmt -> rowCount();
 while($data = $stmt -> fetch(PDO::FETCH_ASSOC)){ ?>
    <h4><?php echo htmlentities($data['nama'], ENT_QUOTES, 'UTF-8'); ?></h4>
    <p><?php echo htmlentities($data['tanggal'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p><?php echo htmlentities($data['isi_komentar'], ENT_QUOTES, 'UTF-8'); ?></p>
<?php
 }
?>
<br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .text{
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: none;
        border-bottom: 2px solid DodgerBlue;
        background-color:#E6E6FA;
    }
    .text:focus{
        border-bottom: 2px solid LightSteelBlue;
    }
    .button{
        background-color: DodgerBlue;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 50%;
    }
    .button:hover {
        opacity: 0.8;
    }
        </style>
</head>
<body>

<form action="" method="post">
    <input type="text" class="text" name="nama" placeholder="Nama Anda"><br><br>
    <textarea name="isi" class="text" placeholder="Isi Komentar" rows="10"></textarea> <br><br>
    <input type="submit" class="button" name="btnkomen" value="Submit">
</form>
</body>
</html>

<?php
    if(isset($_POST['btnkomen'])){
        $nama = $_POST['nama'];
        $isi = $_POST['isi'];
        $tgl = date("d-m-Y");

        $sql = "INSERT INTO komentar VALUES ('', '$id', '$nama', '$tgl', '$isi') ";
        $stmt = $db -> prepare($sql);
        $stmt -> execute();
        $data = $stmt -> rowCount();

        echo "Sukses";
        echo "<meta http-equiv='refresh' content='1;url=detailberita.php?detail=".$id."' >";
    }
?>