
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes articles</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Liste de mes articles</h1>

    <div class="articles">

        <?php foreach ($articles as $article): ?>

            <div class="carte">

                <span class="etiquette-categorie <?php if ($article['categorie_couleur'] == 'bleu'): ?>bleu<?php else: ?>rose<?php endif; ?>">

                    <?= htmlspecialchars($article['categorie_libelle']) ?>

                </span>

                <?php if ($article['id'] == 1): ?>

                    <p>
                        <small class="badge-special">
                            ⭐ À la une
                        </small>
                    </p>

                <?php endif; ?>

                <h3>
                    <?= htmlspecialchars($article['titre']) ?>
                </h3>

                <p>
                    <?= htmlspecialchars($article['description']) ?>
                </p>

            </div>

        <?php endforeach; ?>

    </div>

</body>
</html>
