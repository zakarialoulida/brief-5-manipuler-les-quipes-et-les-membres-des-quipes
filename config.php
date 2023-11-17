<?php
$servername = "localhost";
$username = "root";
$password = "zakaria12";
$database = "mydata";

// // Connexion à la base de données
$sql = mysqli_connect($servername, $username, $password, $database);
// if(isset($_POST['ok'])){
//     var_dump($_POST);
// }



// Récupérer les données du formulaire

$nom = $_POST['nom'];
$prénom = $_POST['prénom'];
$email = $_POST['email'];
$téléphone = $_POST['téléphone'];
$rôle = $_POST['rôle'];
$équipe_ID = $_POST['équipe_ID'];
$statut = $_POST['statut'];

// Requête d'insertion dans la base de données
$requete = "INSERT INTO PERSONNEL ( nom, prénom, email, téléphone, rôle,équipe_ID, statut)
        VALUES ( '$nom', '$prénom', '$email', '$téléphone', '$rôle', '$équipe_ID', '$statut')";

if (mysqli_query($sql, $requete)) {
    header("Location:  http://localhost:3000/index.php");
} else {
     echo '<script>alert("cette équipe n\'existe pas")</script>'; 
    echo "Erreur lors de l'ajout du membre : " . mysqli_error($sql);
   
}

// Fermer la connexion à la base de données
mysqli_close($sql);

?>
