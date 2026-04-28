<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'fatec' and $_POST['password'] == 'araras'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Fatec Araras - SP';
         header("location: BemVindo.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>PROVA_ORLANDO_PHP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style type="text/css">
        body{text-align: center;}
        .wrapper{ width: 600px; padding: 50px; }
    </style>
</head>
<center><body>
    <strong><div class="wrapper">
        <h1 class="text-success">Acesso ao sistema </h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <h3><label>Nome de usuário: </label></h3>
                <input type="text" name="username" class="form-control" value="">
                <span class="help-block"></span>
            </div>   
            <br> 
            <div class="form-group">
                <h3><label>Senha: </label></h3>
                <input type="password" name="password" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Acessar">
            </div>
        </form>
    </div></strong>  
</body></center>
</html>