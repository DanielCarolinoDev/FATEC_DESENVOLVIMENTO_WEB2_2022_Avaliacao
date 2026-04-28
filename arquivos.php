
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>PROVA_ORLANDO_PHP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    
<h1> Enviado com sucesso, aguarde o retorno da instituição!</h1>

</body>
</html>

<?php
$filename = "arquivos.txt";
if(!file_exists("arquivos.txt")){
    $handle = fopen("arquivos.txt", "w");
} else {
    $handle = fopen("arquivos.txt", "a");
}

fwrite($handle, "nome\n");
fwrite($handle, "telefone\n");
fwrite($handle, "curso\n");
fwrite($handle, "periodo\n");
fflush($handle);
fclose($handle);

$handle = fopen("arquivos.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);
?>

