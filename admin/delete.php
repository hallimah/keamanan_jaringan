<?php
/*
  Author : Mohamed Aimane Skhairi
  Email : skhairimedaimane@gmail.com
  Repo : https://github.com/medaimane/crud-php-pdo-bootstrap-mysql
*/

include_once 'dbconfig.php';

if(isset($_POST['btn-del']))
{
	$id = $_GET['delete_id'];
	$crud->delete($id);
	header("Location: delete.php?deleted");	
}

?>
<?php include_once 'header.php'; ?>

<div class="container">

	<?php
	if(isset($_GET['deleted']))
	{
		?>
        <div class="alert alert-success">
    	Success deleted 
		</div>
        <?php
	}
	else
	{
		?>
        <div class="alert alert-danger">
        Are you sure?
		</div>
        <?php
	}
	?>	
</div>

<div class="container">
 	
	 <?php
	 if(isset($_GET['delete_id']))
	 {
		 ?>
         <table class='table table-bordered'>
         <tr>
         <th>No</th>
         <th>Judul Berita</th>
         <th>Kategori</th>
         <th>Isi Berita</th>
         </tr>
         <?php
         $stmt = $DB_con->prepare("SELECT * FROM berita WHERE id_berita=:id");
         $stmt->execute(array(":id"=>$_GET['delete_id']));
         while($row=$stmt->fetch(PDO::FETCH_BOTH))
         {
             ?>
             <tr>
             <td><?php print($row['id_berita']); ?></td>
             <td><?php print($row['judul_berita']); ?></td>
             <td><?php print($row['kategori']); ?></td>
             <td><?php print($row['isi_berita']); ?></td>
             </tr>
             <?php
         }
         ?>
         </table>
         <?php
	 }
	 ?>
</div>

<div class="container">
<p>
<?php
if(isset($_GET['delete_id']))
{
	?>
  	<form method="post">
    <input type="hidden" name="id" value="<?php echo $row['id_berita']; ?>" />
    <button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i> &nbsp; Yes</button>
    <a href="list.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; No</a>
    </form>  
	<?php
}
else
{
	?>
    <a href="list.php" class="btn btn-large btn-success" style="float: right;><i class="glyphicon glyphicon-backward></i> &nbsp; back to List</a>
    <?php
}
?>
</p>
</div>	
<?php include_once 'footer.php'; ?>