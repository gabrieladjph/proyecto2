<?php

require 'models.task.php';

$tasks = []; 
$task[0] = new tasks ('Jefe', 'Liderar los grupos', 'Gabriela Puerta','Activo');
$task[1] = new tasks ('Administrador', 'Administracion de papeles y cuentas', 'Luis Miguel Bruzual','Activo');
$task[2] = new tasks ('Director', 'Coordinar y organizar las actividades', 'Maria Ines Dopuoy','Activo');
$task[3] = new tasks ('Secretario', 'Atencion al cliente', 'Maria Ines Bruzual','Activo');

require 'views/task.view.php';

?>

