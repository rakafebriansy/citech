<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["judul"]; ?></title>
</head>

<body>
    <h1>Hello World</h1>
    <h1><?= index(); ?></h1>
    <form action="<?= BASEURL; ?>/test" method="post">
        <input type="text" name="nama">
        <button type="submit">Submit</button>
    </form>
    
</body>

</html>