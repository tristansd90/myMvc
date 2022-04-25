<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form page</title>
</head>

<body>
    <header>
        <h1>FORM PAGE</h1>
    </header>
    <main>
        <form action="../blog/form.html.php" method="POST">
            <label for="date"><strong>date</strong></label>
            <input id="date" type="date" name="date">
            <br><br>
            <label for="title"><strong>Titre</strong></label>
            <input id="title" type="text" name="title">
            <br><br>
            <label for=" content"><strong>description</strong></label>
            <textarea id="content" name="content"></textarea>
            <br><br>
            <input type="hidden" name="sent">
            <input type="submit" name="submit" value="valider">
        </form>
    </main>
</body>

</html>