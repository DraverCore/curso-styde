<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Usuarios</title>
</head>
<body>
    <h1><?php echo e($title);?></h1>
    <ul>
        <?php foreach ($users as $user): ?>
        <li><?php echo e($user); //Código escapado de HYML con "e" ?></li> 
        <?php endforeach; ?>
    </ul>
</body>
</html>