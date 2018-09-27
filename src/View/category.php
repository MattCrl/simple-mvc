<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<section>
    <h1>Categories</h1>
    <ul>
        <?php foreach ($categories as $category) : ?>
            <li><a href="/category/<?= $category['id'] ?>"><?= $category['name'] ?></a></li>
        <?php endforeach ?>

    </ul>

    <a href="/">Go back to the items list</a>
</section>
</body>
</html>
