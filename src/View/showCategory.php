<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<main>
    <h1>Category <?= $category['name'] ?></h1>
    <ul>
        <li>Id : <?= $category['id'] ?></li>
    </ul>
    <a href='/category'>Back to list</a>
</main>
</body>
</html>