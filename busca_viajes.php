<?php session_start();
    if (isset($_SESSION['usuario'])){
        header('Location: busca_viajes.php');
    } else {
        header('Location: opc_login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aquí se van a buscar los viajes</h1>
</body>
</html>