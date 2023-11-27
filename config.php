<?php
$servername = "localhost";
$username = "root";
$password = "zakaria12";
$database = "mydata";


$conn = mysqli_connect($servername, $username, $password, $database);


$nom = $_POST['nom'];
$prénom = $_POST['prénom'];
$email = $_POST['email'];
$téléphone = $_POST['téléphone'];
$rôle = $_POST['rôle'];
$équipe_ID = $_POST['équipe_ID'];
$statut = $_POST['statut'];


$requete = "INSERT INTO PERSONNEL ( nom, prénom, email, téléphone, rôle,équipe_ID, statut)
        VALUES ( '$nom', '$prénom', '$email', '$téléphone', '$rôle', '$équipe_ID', '$statut')";

if (mysqli_query($conn, $requete)) {
    header("Location:  http://localhost/brief-5/index.php");
} else {
     echo '<script>alert("cette équipe n\'existe pas")</script>'; 
    echo "Erreur lors de l'ajout du membre : " . mysqli_error($sql);
   
}


mysqli_close($sql);

?>
