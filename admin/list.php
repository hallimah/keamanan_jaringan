<?php 
/*
  Author : Mohamed Aimane Skhairi
  Email : skhairimedaimane@gmail.com
  Repo : https://github.com/medaimane/crud-php-pdo-bootstrap-mysql
*/
?>
<?php include_once 'dbconfig.php'; ?> <!--inclure de l'instance de la class crud-->
<?php include_once 'header.php'; ?> <!--inclure le header de la page -->

<div class="container">
    <!--lien vers la page d'ajoute d'utilisateur-->
    <a href="add-data.php" class="btn btn-large btn-info">
        <i class="glyphicon glyphicon-plus"></i> &nbsp; Tambah Berita
    </a>
</div>
<br />
<div class="container"> 
    <!--creation du tableau-->
	<table class='table table-bordered table-responsive'> 
        <tr>
            <th>No</th>
            <th>Judul Berita </th>
            <th>Tanggal</th>
            <th>Kategori</th>
            <th>Gambar</th>
            <th>Isi Berita</th>
            <th colspan="2" align="center">Actions</th>
        </tr>
        <?php    
		  $crud->dataview("SELECT * FROM berita"); // l'appele du méthode d'affichage.
	    ?>
    </table> 
</div>
<?php include_once 'footer.php'; ?> <!--inclure le footer de la page -->