<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ajouter un Membre</title>
</head>
<body class="flex">


<form  class="m-auto mt-4 border-black border-2  rounded center flex flex-col items-star  w-1/2 p-5" action="config.php" method="post" >

<h2  class=" inline bg-gray-200  text-center " >Formulaire d'ajout de Membre</h2>
    <label for=" nom">Nom:</label>
    <input class="  border-black border-2 rounded" type="text" name="nom" required><br>

    <label for="prenom">Prénom:</label>
    <input class=" border-black border-2 rounded"  type="text" name="prénom" required><br>

    <label for="email">Email:</label>
    <input  class=" border-black border-2 rounded" type="email" name="email" required><br>

    <label for="telephone">Téléphone:</label>
    <input class=" border-black border-2 rounded"  type="tel" name="téléphone" required><br>

    <label for="role">Rôle:</label>
    <input class=" border-black border-2 rounded"  type="text" name="rôle" required><br>

    <label for="equipe_id">Équipe ID:</label>
    <input class=" border-black border-2 rounded"  type="text" name="équipe_ID" required><br>

    <label for="statut">Statut:</label>
    <input class=" border-black border-2 rounded"  type="text" name="statut" required><br>

    <input class="  border-2 border-blue-500 cursor-pointer" type="submit" value="Ajouter Membre" name="ok">
</form>


</body>
</html>