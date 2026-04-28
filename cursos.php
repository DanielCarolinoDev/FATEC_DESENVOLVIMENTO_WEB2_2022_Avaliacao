
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>PROVA_ORLANDO_PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 600px; padding: 50px; }
    </style>
</head>
<body>
    <div class="wrapper">
    <br><br><br>
        <h2>CADASTRO PARA CURSOS</h2>
        <br><br><br>
        <form method="post" action="/arquivos.txt">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" >
                <span class="help-block"></span>
            </div><br><br>
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" name="telefone" class="form-control">
                <span class="help-block"></span>
            </div><br><br>
            <div class="form-group">
                <label>Curso</label>
                <input type="text" name="curso" class="form-control">
                <span class="help-block"></span>
            </div><br><br>
            <div class="form-group">
                <label>Periodo</label>
                <input type="text" name="periodo" class="form-control">
                <span class="help-block"></span>
            </div><br><br>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="ENVIAR">
            </div><br><br>

            <h4> Envie o formulário e aguarde o retorno. </h4>
        </form>
    </div>   

</body>
</html>