<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <header class=" flex justify-between p-12">
        <h4>back to tables</h4>
        <a href="index.php" class="bg-blue-500 rounded p-2"0>back </a>
    </header>
    <div>
        <?php
        if(isset($_GET["id"])){
            $id=$_GET["id"];
        $servername = "localhost";
$username = "root";
$password = "zakaria12";
$database = "mydata";

// Connexion à la base de données
$sql = mysqli_connect($servername, $username, $password, $database);

// Vérifier la connexion
if (!$sql) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
  $persselect=" DELETE  FROM personnel WHERE Membre_ID=$id";
  if(mysqli_query($sql,$persselect)){
    header("Location:  ./index.php");
   
}else
echo"". mysqli_error($sql);
} 

        ?>
    </div>
</body>
</html>