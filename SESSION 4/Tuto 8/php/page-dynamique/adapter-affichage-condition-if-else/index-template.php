
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes articles</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 30px;
        }

        h1 {
            text-align: center;
        }

        .articles {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .carte {
            background: white;
            width: 280px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px #ccc;
        }

        .etiquette-categorie {
            padding: 6px 12px;
            border-radius: 20px;
            color: white;
            font-size: 13px;
        }

        .bleu {
            background: #2563eb;
        }

        .rose {
            background: #db2777;
        }

        .badge-special {
            display: inline-block;
            background: #fef3c7;
            color: #92400e;
            padding: 6px 10px;
            border-radius: 15px;
            margin-bottom: 10px;
        }

        h3 {
            color: #333;
        }
    </style>
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
