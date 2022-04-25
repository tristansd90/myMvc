<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article page</title>
</head>

<body>
    <header>
        <h1>ARTICLE PAGE</h1>
    </header>

    <main>
        <a href="/?controller=blog&action=form">add article</a>
        <br><br>
        <?php
        foreach ($articles as $article) : ?>
            <div>
                <tr>
                    <td><small><?= $article['articleDate']; ?></small></td><br>
                    <td><strong><?= $article['articleTitle']; ?></strong></td><br>
                    <td><?= $article['articleContent']; ?></td><br>
                </tr>
            </div>
            <br><br>
        <?php endforeach; ?>
    </main>
</body>

</html>