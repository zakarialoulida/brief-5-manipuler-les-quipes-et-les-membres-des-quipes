<?php
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

// Requête pour récupérer les données de la table EQUIPE
$requete1 = "SELECT * FROM EQUIPE";
$resultat1 = mysqli_query($sql, $requete1);

// Vérifier si la requête a réussi
if ($resultat1) {
    // Initialiser le tableau $donnees1
    $donnees1 = array();

    // Récupérer les lignes de résultat et les stocker dans le tableau $donnees1
    while ($row = mysqli_fetch_assoc($resultat1)) {
        $donnees1[] = $row;
    }

    // Libérer le résultat de la mémoire
    mysqli_free_result($resultat1);
} else {
    // Gérer les erreurs si la requête a échoué
    echo "Erreur dans la requête : " . mysqli_error($sql);
}
/**************************TABLEAU DES MEMBRES******************************* */
// Requête pour récupérer les données de la table PERSONNEL
$requete2 = "SELECT * FROM PERSONNEL";
$resultat2 = mysqli_query($sql, $requete2);

// Vérifier si la requête a réussi
if ($resultat2) {
    // Initialiser le tableau $donnees2
    $donnees2 = array();

    // Récupérer les lignes de résultat et les stocker dans le tableau $donnees2
    while ($row = mysqli_fetch_assoc($resultat2)) {
        $donnees2[] = $row;
    }

    // Libérer le résultat de la mémoire
    mysqli_free_result($resultat2);
} else {
    // Gérer les erreurs si la requête a échoué
    echo "Erreur dans la requête : " . mysqli_error($sql);
}

// Fermer la connexion à la base de données

/*************/
/**************************TABLEAU jointées******************************* */
$jointables = "SELECT personnel.Membre_ID ,personnel.nom, personnel.prénom,personnel.email,personnel.téléphone, personnel.rôle,personnel.équipe_ID,personnel.statut,EQUIPE.Nom_Équipe ,EQUIPE.Date_de_Création
FROM PERSONNEL
JOIN EQUIPE ON personnel.équipe_ID = EQUIPE.équipe_ID;";
$resultat3 = mysqli_query($sql, $jointables);
if ($resultat3) {
    $donnees3 = array();
    while ($row = mysqli_fetch_assoc($resultat3)) {
        $donnees3[] = $row;
    }
    mysqli_free_result($resultat3);
} else {
    echo "Erreur dans la requete :" . mysqli_error($sql);
}

/*************************************************/
mysqli_close($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body >
<div class=" flex justify-evenly m-4">
        <button id="buton1" class="bg-blue-500 border-2 rounded-md p-6">tableau des membres</button>
        <button id="buton2" class="bg-blue-500 border-2 rounded-md p-6">tableau jointées</button>
        <button id="buton3" class="bg-blue-500 border-2 rounded-md p-6">tableau des équipes</button>
         <button id="buton" class="bg-blue-500  border-2 rounded-md  p-6"><a href="ajouter.php">AJOUTER</a></button>
        </div>
    <div id="">

        <table id="table1" class="hidden">


            <thead>
                <tr>
                    <th colspan="10">
                        <h1 class="bg-gray-500 text-center my-3 "> TABLEAU DES MEMBRES</h1>
                    </th>
                </tr>
                <tr>
                    <th>Équipe ID</th>
                    <th>Nom d'Équipe</th>
                    <th>Date de Création</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($donnees1 as $ligne) : ?>
                    <tr>
                        <?php foreach ($ligne as $colonne) : ?>
                            <td><?php echo $colonne; ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <table id="table2" class="hidden">

        <thead>
            <tr>
                <th colspan="10">
                    <h1 class="bg-gray-500 text-center my-3 "> TABLEAU DES PERSONNEL</h1>
                </th>
            </tr>
            <tr>
                <th>Membre ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Rôle</th>
                <th>Équipe ID</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($donnees2 as $ligne) : ?>
                <tr>
                    <?php foreach ($ligne as $colonne) : ?>
                        <td><?php echo $colonne; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- TABLEAU JOINTées -->
    <div id="">

        <table id="table3" class="hidden">

            <thead>
                <tr>
                    <th colspan="10">
                         <h1 class="bg-gray-500 text-center my-3 "> TABLEAU jointées</h1>
                    </th>
                </tr>
                <tr>
                    <th>Membre ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Rôle</th>
                    <th>Équipe ID</th>
                    <th>Statut</th>
                    <th>Nom d'Équipe</th>
                    <th>Date de Création</th>
                    <th>EDIT</th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach ($donnees3 as $ligne) : ?>
                    <tr>
                        <?php foreach ($ligne as $colonne) : ?>
                            <td><?php echo $colonne; ?></td> 
                            
                       <?php endforeach; ?>
                       <td>
                    <button class="bg-blue-500 border-2 rounded-md p-2">MODIFIER</button>
                    <button class="bg-red-500 border-2 rounded-md p-2"><a href="supprimer.php?id=<?php echo $ligne['Membre_ID']; ?>">SUPPRIMER</a></button>
                </td>
                    </tr>
       
               
            </tr>
        <?php endforeach; ?>
            </tbody>
        </table>
    </div>
   
    
   

   
    <script src="java.js"></script>
</body>

</html>