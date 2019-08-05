<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset="UTF-8">
<meta name = "viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>

</head>
<body>
    <h1>Lista de tareas</h1>
    <ul>
    <?php foreach ($tasks as $key => $tasks): ?>
    <h2>Tarea N <?= $key+1; ?> </h2>
    <li>Titulo <?= $tasks => titulo;?> </li>
    <li>Autor <?= $tasks => autor;?> </li>
    <li>Descripcion <?= $tasks => descripcion;?> </li>

    <?php $state = ($tasks =>estado) ? 'Completado': 'Incompleto'; ?>
    <li>Estado: <?=$state; ?> </li>
<br>
<?php endforeach; ?>
    </ul>
</body>
</html>