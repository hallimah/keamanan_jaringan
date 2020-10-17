<?php
/*
  Author : Mohamed Aimane Skhairi
  Email : skhairimedaimane@gmail.com
  Repo : https://github.com/medaimane/crud-php-pdo-bootstrap-mysql
*/

include_once 'dbconfig.php';
if(isset($_POST['btn-update']))
{
	$id = $_GET['edit_id'];
    $judul = $_POST['judul_berita'];
    $tanggal = date("d-m-Y");
    $kategori = $_POST['kategori'];
    $gambar = $_POST['gambar'];
	$isi = $_POST['isi_berita'];
	
	if($crud->update($id,$judul, $tanggal,$kategori,$gambar,$isi))
	{
		$msg = "<div class='alert alert-info'>
				Modification success
				</div>";
	}
	else
	{
		$msg = "<div class='alert alert-warning'>
				Eror modification
                </div>";
	}
}

if(isset($_GET['edit_id']))
{
	$id = $_GET['edit_id'];
	extract($crud->getID($id));	
}
?>

<?php include_once 'header.php'; ?>
<div class="container">
<?php
if(isset($msg))
{
	echo $msg;
}
?>
</div>
<div class="container">	 
    <form method='post'>
    <table class='table table-bordered'>
        <tr>
            <td>judul_berita</td>
            <td><input type='text' name='judul_berita' class='form-control' value="<?php echo $judul_berita; ?>" required></td>
        </tr>
 
        <tr>
            <td>Kategori Berita</td>
            <td><input type='text' name='kategori' class='form-control' value="<?php echo $kategori; ?>" required></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td><input type='file' name='gambar' class='form-control' value="<?php echo $gambar; ?>" required></td>
        </tr>
        <tr>
            <td>Isi Berita</td>
            <td><input type='text' name='isi_berita' class='form-control' value="<?php echo $isi_berita; ?>" required></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="btn-update">
    			<span class="glyphicon glyphicon-edit"></span>  Update
				</button>
                <a href="list.php" class="btn btn-large btn-success" style="float: right;"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to List</a>
            </td>
        </tr>
    </table>
</form>
</div>
<?php include_once 'footer.php'; ?>