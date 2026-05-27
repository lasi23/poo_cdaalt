<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? ""?></title>

</head>
<body>
    <main>
        <h1>Ajouter une categorie</h1>
        <form action="" method="post">
            <fieldset>
                <label for="name">
                    <input type="text" name="name" placeholder="nom d'une categorie">
                </label>
                <input type="submit" value="Ajouter" name="submit">
            </fieldset>
        </form>
        <p><?= $data["msg"] ?? "" ?></p>
    </main>
</body>
</html>