<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<section>
    <h1>Items</h1>
    <ul>
        <?php foreach ($items as $item) : ?>
            <li><a href="/item/<?= $item['id'] ?>"><?= $item['title'] ?></li>
        <?php endforeach ?>

    </ul>

    <a href="/category">Show all categories</a>
</section>
</body>
</html>
