
<?php 

$servername = "localhost";
$username = "root";
$password = "zakaria12";
$database = "mydata";

$id = "";
$sql = mysqli_connect($servername, $username, $password, $database);
if(isset($_GET["id"])){
    $id=$_GET["id"];
    

$modify=" SELECT * FROM PERSONNEL WHERE Membre_ID=$id";

$resultat2=mysqli_query($sql,$modify);

$donnees2 = mysqli_fetch_assoc($resultat2);

}


 if (isset($_POST["submit"])) {
    // Use isset to check if form fields are set
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prénom']) ? $_POST['prénom'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telephone = isset($_POST['téléphone']) ? $_POST['téléphone'] : '';
    $role = isset($_POST['rôle']) ? $_POST['rôle'] : '';
    $equipe_ID = isset($_POST['équipe_ID']) ? $_POST['équipe_ID'] : '';
    $statut = isset($_POST['statut']) ? $_POST['statut'] : '';

    $modify1 = "UPDATE PERSONNEL SET nom = '$nom', prénom = '$prenom', email = '$email' , téléphone = $telephone ,rôle='$role',équipe_ID='$equipe_ID',statut='$statut' WHERE Membre_ID='$id'";

    // Use prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($sql, $modify1);
    
    if ($stmt) {
        mysqli_stmt_execute($stmt);
        header("Location: index.php?success=1");
        exit();
    } else {
        echo "Error: " . mysqli_error($sql);
    }

   
    mysqli_close($sql);
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<body class="flex">


<form  class="m-auto mt-4 border-black border-2  rounded center flex flex-col items-star  w-1/2 p-5" action="" method="post" >

<h2  class=" inline bg-gray-200  text-center " >Formulaire d'ajout de Membre</h2>
    <label for=" nom">Nom:</label>
    <input class="  border-black  border-2 rounded" value="<?php echo $donnees2['nom']; ?>" type="text" name="nom" required><br>

    <label for="prenom">Prénom:</label>
    <input class=" border-black border-2 rounded" value="<?php echo $donnees2['prénom']; ?>" type="text" name="prénom" required><br>

    <label for="email">Email:</label>
    <input  class=" border-black border-2 rounded"  value="<?php echo $donnees2['email']; ?>"type="email" name="email" required><br>

    <label for="telephone">Téléphone:</label>
    <input class=" border-black border-2 rounded"  value="<?php echo $donnees2['téléphone']; ?>" type="tel" name="téléphone" required><br>

    <label for="role">Rôle:</label>
    <input class=" border-black border-2 rounded"  value="<?php echo $donnees2['rôle']; ?>" type="text" name="rôle" required><br>

    <label for="equipe_id">Équipe ID:</label>
    <input class=" border-black border-2 rounded"  value="<?php echo $donnees2['équipe_ID']; ?>" type="text" name="équipe_ID" required><br>
 
    <label for="statut">Statut:</label>
    <input class=" border-black border-2 rounded"  value="<?php echo $donnees2['statut']; ?>" type="text" name="statut" required><br>

    <input class="  border-2 border-blue-500 cursor-pointer" type="submit" name="submit" value="Modifier" name="ok">
</form>




</body>
</html>