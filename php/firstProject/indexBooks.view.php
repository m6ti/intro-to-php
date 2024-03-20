
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h1>Books</h1>
    <ul>
        <?php foreach ( $filteredBooks as $book) :?>
            <li>
                <a href = "<?= $book['link']; ?>">
                    <?=$book['title']?> by <?=$book['author']?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
