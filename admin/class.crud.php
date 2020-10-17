<?php
/*
  Author : Mohamed Aimane Skhairi
  Email : skhairimedaimane@gmail.com
  Repo : https://github.com/medaimane/crud-php-pdo-bootstrap-mysql
*/

class crud // la class des operations avec la base de données.
{
	private $db;
	
	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}
	
	public function create($judul,$tanggal,$kategori,$gambar,$isi) // methode d'insertion des données.
	{
		try
		{
			// préparation de la requete :
			$stmt = $this->db->prepare(
				"INSERT INTO berita(judul_berita,tanggal, kategori,gambar, isi_berita) 
						VALUES(:judul_berita,:tanggal, :kategori, :gambar, :isi_berita)");
			// affectations des valeurs :
			$stmt->bindparam(":judul_berita",$judul);
			$stmt->bindparam(":tanggal",$tanggal);
			$stmt->bindparam(":kategori",$kategori);
			$stmt->bindparam(":gambar",$gambar);
			$stmt->bindparam(":isi_berita",$isi);
			// execution de la reqeute :
			return $stmt->execute();
		}
		catch(PDOException $e) // l'utilisation de "try catch" pour vérifier si on a des erreurs, 
		{					   // et afficher des messages.
			echo $e->getMessage();	
			return false;
		}	
	}
	
	public function getID($id)  // return les informations de l'utilisateur qui est équivalant à l'id entré aux paramétre. 
	{
		$stmt = $this->db->prepare("SELECT * FROM berita WHERE id_berita=:id"); // preparation de la requete sql avec l'id.
		$stmt->execute(array(":id"=>$id)); // execution de la requete.
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC); // affectation de la la résultat (un ligne de tableau). 
		return $editRow;
	}

	// modification d'un utilisateur avec tous les champs.
	public function update($id,$judul, $tanggal,$kategori, $gambar,$isi)
	{
		try
		{
			// préparation de la requete :
			$stmt=$this->db->prepare("UPDATE berita SET judul_berita=:judul, tanggal=:tanggal,
		                                               kategori=:kategori, gambar=:gambar,
													   isi_berita=:isi_berita
													WHERE id_berita=:id ");
			// affectation des valeurs :
			$stmt->bindparam(":judul",$judul);
			$stmt->bindparam(":tanggal",$tanggal);
			$stmt->bindparam(":kategori",$kategori);
			$stmt->bindparam(":gambar",$gambar);
			$stmt->bindparam(":isi_berita",$isi);
			$stmt->bindparam(":id",$id);
			// execution de la requete :
			$stmt->execute();
			return true;	
		}
		catch(PDOException $e) // vérification des erreurs.
		{
			echo $e->getMessage();	
			return false;
		}
	}
	
	public function delete($id) // suppression d'un utilisateur par l'id.
	{
		$stmt = $this->db->prepare("DELETE FROM berita WHERE id_berita=:id"); // préparation.
		$stmt->bindparam(":id",$id); // affectation du valeur
		$stmt->execute(); // execution 
		return true; // toujoure on retourne true or false pour 
	}                // l'utiliation aprés dans les autres pages.
	
		
	public function dataview($query) // l'affichage des données, on passe en paramétre une requete.
	{
		$no =1;
		$stmt = $this->db->prepare($query); // préparation de la requete 
		$stmt->execute(); // exectuion de la requete	
		if($stmt->rowCount() > 0) // teste sur le nembres des ligne retourner, 
		{	// si il y a des ligne on va l'afficher :
			while($row=$stmt->fetch(PDO::FETCH_ASSOC)) // tant qu'on a la ligne, on affecte ce ligne 
			{									       // et on affiche ce ligne sur le tableau html 
				?>
                <tr>
                	<td><?php print $no++ ?></td> <!--utilisation de print pour l'affichage de id pour ce ligne-->
					<td><?php print($row['judul_berita']); ?></td><!--affichage de nome-->
					<td><?php print($row['tanggal']); ?></td>
                	<td><?php print($row['kategori']); ?></td><!--affichage de prénom-->
					<td><?php print($row['gambar']); ?></td>
                	<td><?php print($row['isi_berita']); ?></td><!--affichage de email-->
                	<td align="center">
					<!--ici on va crée par l'id de la ligne courant, un lien vers la page de modification-->
                	<a href="edit-data.php?edit_id=<?php print($row['id_berita']); ?>">
					<i class="glyphicon glyphicon-edit"></i> <!--utilisation d'une icone de bootstrap-->
					</a>
                	</td>
                	<td align="center">
					<!--ici on va crée par l'id de la ligne courant, un lien vers la page de suppression-->
                	<a href="delete.php?delete_id=<?php print($row['id_berita']); ?>">
					<i class="glyphicon glyphicon-remove-circle"></i><!--utilisation d'une icone de bootstrap-->
					</a>
                	</td>
                </tr>
                <?php
			}
		}
		else // si on a aucune ligen sur la table de la base de donées,
		{
			?>
            <tr>
            <td>Tidak Ada Berita</td><!--on affiche la table vide-->
            </tr>
            <?php
		}
	}	
}
?>