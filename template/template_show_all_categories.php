<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <title><?= $title ?? "" ?></title>
</head>

<body>
    <main class="container-fluid">
        <section>
            <?php if (gettype($data["msg"]) == 'string') : ?>
                <h2><?= $data["msg"] ?></h2>
            <?php else : ?>
                <?php foreach ($data["msg"] as $category): ?>
                    <article>
                        <h3 id="<?= $category["id"] ?>"><?= $category["name"] ?></h3>
                    </article>
                <?php endforeach ?>
            <?php endif ?>
            <!-- afficher la liste des categories-->
        </section>

    </main>
</body>

</html>