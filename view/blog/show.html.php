<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
</head>

<body>
    <header>
        <h1>SHOW</h1>
    </header>

    <body>
        <table>
            <?php
                foreach ($articles as $article) { ?>
                    <tr>
                        <td><?= $article['articleTitle']; ?></td>
                        <td><?= $article['articleContent']; ?></td>
                    </tr>
            <?php } ?>
        </table>


    </body>
</body>

</html>