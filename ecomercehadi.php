

<?php
$nom_bdd = "ecomerce";   
$server = "localhost";
$user = "root";
$password = "";

try {
    // Connexion à la base de données avec PDO
    $connexion = new PDO("mysql:host=$server;dbname=$nom_bdd", $user, $password);
    $requete_pourvous = $connexion->query("SELECT titre, prix_vente, image FROM produit LIMIT 3");
    $produits_pourvous = $requete_pourvous->fetchAll(PDO::FETCH_ASSOC);
  
    $requete_nouveaute = $connexion->query("SELECT titre, prix_vente, image FROM produit LIMIT 3, 3");
    $produits_nouveaute = $requete_nouveaute->fetchAll(PDO::FETCH_ASSOC);
  
    $requete_plusvendus = $connexion->query("SELECT titre, prix_vente, image FROM produit LIMIT 6, 3");
    $produits_plusvendus = $requete_plusvendus->fetchAll(PDO::FETCH_ASSOC);
    
    /*if (isset($_POST['submit-search'])) {
        $search = $_POST['search'];

        // Effectuer la requête de recherche dans la base de données
        $requete_recherche = $connexion->prepare("SELECT titre, prix_vente FROM produit WHERE titre LIKE :search");
        $requete_recherche->execute(['search' => "%$search%"]);
        $resultats_recherche = $requete_recherche->fetchAll(PDO::FETCH_ASSOC);

        /*echo "<h1>Résultats de recherche</h1>";

        if (count($resultats_recherche) > 0) {
            foreach ($resultats_recherche as $resultat) {
                echo "<div class='box'>";
                echo "<div class='box_top'>";
                // Afficher les détails du produit
                echo "<h3>" . $resultat['titre'] . "</h3>";
                echo "<p>" . $resultat['prix_vente'] . "</p>";
                echo "<button><a href='./produitmixte.html' target='_blank' rel='noopener noreferrer'>Voir plus...</a></button>";
                echo "</div>";
                echo "<div class='box_bottom'>";
                echo "<div class='box_bottom_right'>";
                echo "<a href='lien3.html'>";
                echo "<span class='material-symbols-outlined'>";
                echo "shopping_cart";
                echo "</span>";
                echo "</a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "Aucun résultat trouvé.";
        }
    }*/
  

//barre de recherche

// ... Connexion à la base de données et autres requêtes ...

/*if (isset($_POST['submit-search'])) {
    $search = $_POST['search'];

    // Effectuer la requête de recherche dans la base de données
    $requete_recherche = $connexion->prepare("SELECT titre, prix_vente FROM produit WHERE titre LIKE :search");
    $requete_recherche->execute(['search' => "%$search%"]);
    $resultats_recherche = $requete_recherche->fetchAll(PDO::FETCH_ASSOC);

    echo "<h1>Résultats de recherche</h1>";

    if (count($resultats_recherche) > 0) {
        foreach ($resultats_recherche as $resultat) {
            // Afficher les résultats de recherche
            echo "<div class='box'>";
            // ... Affichage des détails du produit ...
            echo "</div>";
        }
    } else {
        echo "Aucun résultat trouvé.";
    }
}*/
// Barre de recherche
/*if (isset($_POST['submit-search'])) {
  $search = $_POST['search'];

  // Effectuer la requête de recherche dans la base de données
  $requete_recherche = $connexion->prepare("SELECT titre, prix_vente FROM produit WHERE titre LIKE :search");
  $requete_recherche->execute(['search' => "%$search%"]);
  $resultats_recherche = $requete_recherche->fetchAll(PDO::FETCH_ASSOC);

  
}*/



} catch (PDOException $e) {
  echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>



<style>

* {
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
}

header {
  padding: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.header_left ul {
  display: flex;
  list-style: none;
}

.header_left ul li {
  margin-right: 20px;
}

.header_left ul li a {
  text-decoration: none;
  color: #282929;
}

.header_center .inprechercher {
  width: 70%;
  height: 35px;
  padding: 10px;
  border-radius: 15px 0 0 15px;
  border: none;
}

.header_center .btnrechercher {
  border-radius: 0 15px 15px 0;
  border: none;
  height: 35px;
  cursor: pointer;
  background-color: #000;
  color: bisque;
  padding: 0 15px;
}

.header_right img {
  width: 50px;
  height: 45px;
}

.main {
  min-height: 90vh;
}

.couverture img {
  height: 55%;
  width: 100%;
  object-fit: cover;
}








.main_pourvous
{
   /* background-color: chocolate;*/
    height: 50% ;
    

}
.categorie
{
    /*background-color: cyan;*/
   /*height: 40%;*/
    margin-left: 45%;
    margin-bottom: 2%;
    margin-top: 2%;
    height: 13%;
  
}
.main_box
{ 
    height: 87%;
    width: 100%;
    
    /*background-color: chartreuse;*/
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    margin-bottom: 50px;

}
.box {
  /*background-color: red;*/
 /* height: 40px;

  width: 100%;*/
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  border: 1px solid #ddd;
  border-radius: 4px;
  padding-left: 10px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 30px;
 box-sizing: border-box;

 height: 240px;/*240*/
    width: 25%;
}
button
{
  /* background-color: white;*/
   padding: 5px;
   border-width: 0.1px;
   box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  border: 1px solid #ddd;
  border-radius: 4px;

}
button a
{
    text-decoration: none;
    color: black;
}
.box_top
{
  /*background-color: crimson;*/
    height: 80%;
    overflow: hidden; 
    position: relative;
}
.box_top img
{
    height: 100%;
    width: 100%;
    object-fit: cover; /* Pour que l'image s'ajuste sans se déformer, mais peut laisser des espaces vides */
    margin: 0; /* Réinitialise les marges de l'image */
    padding: 0; 
    object-position: center center; /* Centrer l'image horizontalement et verticalement */
    position: absolute; /* Position absolue pour que l'image soit positionnée correctement */
    top: 0; /* Alignement en haut du conteneur */
    left: 0; /* Alignement à gauche du conteneur */object-position: center center;
}
.box_bottom
{
    /*background-color: cornflowerblue;*/
    height: 20%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
.box_bottom_left
{
  /*  background-color: brown;*/
    height: 100%;
}
.contacte
{
    background-color:black;
    padding: 50px;
    text-align: center;
    position: sticky;
    top: 0;
    z-index: 1;
    color: white;
}

.contacte a
{
    text-decoration: none;
    color: white;
    
}
#logofacebook
{
    height: 35px;
   margin-right: 15px;
}
#logoinstagram
{
    height: 32px;

}

.box_button {
  text-align: center;
  margin-top: 10px;
  
}
.box_button button
{
    border: none;
}
.chaba
{
    width: 187.5px;
    height: 350px;
}

/*BARRE DE RECHERCHE*/

.main_box {
  /* Ancien style pour les boîtes verticales (à supprimer) */
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  margin-bottom: 50px;
}

.main_box_horizontal {
  /* Nouveau style pour les boîtes horizontales */
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.box {
  /* ... Styles pour les boîtes ... */
  height: 240px;
  width: 25%;
  object-fit: contain;
}



</style>
<html>
  <head>
       <title>photofinal</title>
    
       <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>

  <body>
    
    <header>
      <div class="header_left">
   
        <nav>
          <ul>
                <li><a href="lien1.html"> <span class="material-symbols-outlined">
                  menu
                  </span></a> </li>
              <li><a href="lien2.html">Pour vous</a></li>
              <li><a href="lien3.html">Nouveuté</a></li>
              <li><a href="lien4.html">Les plus vendus</a></li>
              <li><a href="lien4.html">contacte</a></li>
              <li><a href="lien5.html"><span class="material-symbols-outlined">
                  shopping_cart
                  </span></a></li>


          </ul>
      </nav>
 

      </div>
      <div class="header_center">
  <form action="" method="post">
    <input class="inprechercher" type="text" name="search" placeholder="Rechercher">
    <button name="submit-search" class="btnrechercher"><span class="material-symbols-outlined">search</span></button>
  </form>
</div>
  
      <div class="header_right">
           <img src="./image/gr mini logo.png" alt="">
      </div>
    </header>
  



    <div class="main">
      <div class="couverture">
        <img src="./image/Design sans titre (1) (1).png" alt="">
      </div>
      <?php
      if (isset($_POST['submit-search'])) {
        $search = $_POST['search'];
    
        // Effectuer la requête de recherche dans la base de données
        $requete_recherche = $connexion->prepare("SELECT titre, prix_vente, image FROM produit WHERE titre LIKE :search");
        $requete_recherche->execute(['search' => "%$search%"]);
        $resultats_recherche = $requete_recherche->fetchAll(PDO::FETCH_ASSOC);
    
        echo "<div class='main_box_horizontal'>";
        if (count($resultats_recherche) > 0) {
            foreach ($resultats_recherche as $resultat) {
                echo "<div class='box'>";
                echo "<div class='box_top'>";
                // Afficher l'image du produit s'il existe, sinon une image par défaut
                if ($resultat['image']) {
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($resultat['image']) . '" alt="Image">';
                } else {
                    echo '<img src="chemin_vers_image_par_defaut.jpg" alt="Image">';
                }
                echo "</div>";
                echo "<div class='box_bottom'>";
                echo "<div class='box_bottom_left'>";
                echo "<h3>" . $resultat['titre'] . "</h3>";
                echo "<p>" . $resultat['prix_vente'] . "</p>";
                echo "<button><a href='./produitmixte.html' target='_blank' rel='noopener noreferrer'>Voir plus...</a></button>";
                echo "</div>";
                echo "<div class='box_bottom_right'>";
                echo "<a href='lien3.html'>";
                echo "<span class='material-symbols-outlined'>";
                echo "shopping_cart";
                echo "</span>";
                echo "</a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "Aucun résultat trouvé.";
        }
        echo "</div>";
    }

      ?>

      <div class="main_pourvous">
        <div class="categorie">
          <h1>Pour vous</h1>
        </div>

        <div class="main_box">
          <?php foreach ($produits_pourvous as $produit): ?>
            <div class="box">
              <div class="box_top">
              <div class="box_top">
    <?php
        // Vérifier si l'image du produit existe
        if ($produit['image']) {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($produit['image']) . '" alt="Image">';
        } else {
            // Mettre une image par défaut si l'image n'existe pas
            echo '<img src="chemin_vers_image_par_defaut.jpg" alt="Image">';
        }
    ?>
</div>

                            </div>
              <div class="box_bottom">
                <div class="box_bottom_left">
                  <h3><?php echo $produit['titre'] ?></h3>
                  <p><?php echo $produit['prix_vente'] ?></p>
                  <button><a href="./produitmixte.html" target="_blank" rel="noopener noreferrer">voir plus ...</a></button>
                </div>
                <div class="box_bottom_right">
                  <a href="lien3.html">
                    <span class="material-symbols-outlined">
                      shopping_cart
                    </span>
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      

      <div class="categorie">
        <h1>Nouveauté</h1>
      </div>

      <div class="main_box">
        <?php foreach ($produits_nouveaute as $produit): ?>
          <div class="box">
            <div class="box_top">
            <?php
        // Vérifier si l'image du produit existe
        if ($produit['image']) {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($produit['image']) . '" alt="Image">';
        } else {
            // Mettre une image par défaut si l'image n'existe pas
            echo '<img src="chemin_vers_image_par_defaut.jpg" alt="Image">';
        }
    ?>            </div>
            <div class="box_bottom">
              <div class="box_bottom_left">
                <h3><?php echo $produit['titre'] ?></h3>
                <p><?php echo $produit['prix_vente'] ?></p>
                <button><a href="./produitmixte.html" target="_blank" rel="noopener noreferrer">voir plus ...</a></button>
              </div>
              <div class="box_bottom_right">
                <a href="lien3.html">
                  <span class="material-symbols-outlined">
                    shopping_cart
                  </span>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="categorie">
        <h1>Les plus vendus</h1>
      </div>

      <div class="main_box">
        <?php foreach ($produits_plusvendus as $produit): ?>
          <div class="box">
            <div class="box_top">
            <?php
        // Vérifier si l'image du produit existe
        if ($produit['image']) {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($produit['image']) . '" alt="Image">';
        } else {
            // Mettre une image par défaut si l'image n'existe pas
            echo '<img src="chemin_vers_image_par_defaut.jpg" alt="Image">';
        }
    ?>            </div>
            <div class="box_bottom">
              <div class="box_bottom_left">
                <h3><?php echo $produit['titre'] ?></h3>
                <p><?php echo $produit['prix_vente'] ?></p>
                <button><a href="./produitmixte.html" target="_blank" rel="noopener noreferrer">voir plus ...</a></button>
              </div>
              <div class="box_bottom_right">
                <a href="lien3.html">
                  <span class="material-symbols-outlined">
                    shopping_cart
                  </span>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
  


         <div class="contacte">
           
          <p>
            <b>Tel :</b>: 0555536546466 <br><br>
            <label for=""><b>E-mail:</b></label>
            ghaffour@gmail.com <br><br>
            
            
            
          </p>
         </div>
         
         
          
          
          
          
          
          
          
          
         
     </div>
     </div>

         
     </div>
      
       </div>






     </div>

    
  
     
  </body>



</html>

