<?php
    if(isset($_POST["editar"])) {
        $valor = $_POST['editar'];
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
    <div class="container">
        <h1>User</h1>
        <form action="index.php" method="post">
        <h3>Nome de Usuário:</h3>
        <input type="text" name="valor" id="" placeholder="<?php echo $valor ?>">
        <button type="submit" name="salvar">Salvar</button>
        </form>
    </div>
</body>
</html>