<?php
    if(isset($_POST['salvar'])){
        $valor = $_POST['valor'];
      
        setcookie('bolacha', $valor, time() + 3600,'/');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá, <?php echo $_COOKIE['bolacha'] ?>. Seja Bem Vindo!</h1>
    <form action="contador.php" method="post">
    <button type="submit">Editar</button>
    <input type="hidden" name="editar" value="<?php $_COOKIE['bolacha']?>">
    </form>
</html>