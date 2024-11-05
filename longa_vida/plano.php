<?php

$Snum = isset($_GET['Snum']) ? $_GET['Snum'] : '';
$Sdes = isset($_GET['Sdes']) ? $_GET['Sdes'] : '';
$Sval = isset($_GET['Sval']) ? $_GET['Sval'] : '';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manutenção do plano</title>
</head>

<body>
    <header>
        <h1>manutenção do plano</h1>
    </header>
    <section>
        <form action="cadplano.php" method="post">
            <label for="">Número: </label>
            <input type="text" name="numero" id="numero" value="<?php echo htmlspecialchars($Snum); ?>">
            <input type="submit" value="consultar" name="consultar" >
            <br>
            <label for="">descrição: </label>
            <input type="text" name="descricao" id="descricao" value="<?php echo htmlspecialchars($Sdes); ?>">
            <br>
            <label for="">valor: </label>
            <input type="text" name="valor" id="valor" value="<?php echo htmlspecialchars($Sval); ?>">
            <br>
            <input type="submit" value="cadastrar" name="cadastrar">
            <input type="submit" value="alterar" name="alterar">
            <input type="submit" value="excluir" name="excluir">
            <a href="index.html">Sair</a>
        </form>
    </section>
</body>

</html>