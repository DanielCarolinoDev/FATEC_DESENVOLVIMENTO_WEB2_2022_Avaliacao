<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>PROVA_ORLANDO_PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
    <br><br><br>
        <h1 class="text-success">Que bom que voltou !<br><b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Seja bem vindo!</h1>
    </div>
    <p>
    <br><br><br>
        <a href="cursos.php" class="btn btn-primary">INSCRIÇÃO DE CURSOS</a>
        <br><br><br>

        <a href="sair.php" class="btn btn-danger">SAIR</a>

        
    </p>
</body>
</html>