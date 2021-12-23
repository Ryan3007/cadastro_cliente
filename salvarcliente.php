<?php


$nomeCliente = $_GET["nome"];
$cpf = $_GET["cpf"];
$fone = $_GET["fone"];
$email = $_GET["email"];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Cliente</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nome Completo</td>
            <td><?php echo $nomeCliente; ?></td>
        </tr>

        <tr>
            <td>CPF</td>
            <td><?php echo $cpf; ?></td>
        </tr>

        <tr>
            <td>Fone</td>
            <td><?php echo $fone; ?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><?php echo $email; ?></td>
        </tr>
    </table>
</body>
</html>
