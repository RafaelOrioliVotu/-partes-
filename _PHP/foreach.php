<?php
 $linhas = file("../Dados.txt", FILE_IGNORE_NEW_LINES);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minha Página PHP</title>
    <!-- Linkando o CSS da mesma forma que no HTML -->
    <link rel="stylesheet" href="../_CSS/Index.css">
</head>

<body>
    <header>
        <h1>SAVE DE DADOS</h1>
    </header>
<table border="1">
    <tr>
        <th>DATA/HORA</th>
        <th>NOME</th>
        <th>IDADE</th>
        <th>DATA</th>
        <th>EMAIL</th>
        <th>CPF</th>
        <th>DOENÇA</th>
    </tr>

    <?php foreach ($linhas as $linha) {

        $partes = explode("|", $linha);
    ?>

    <tr>
        <td><?=$partes[0]?></td>
        <td><?=$partes[1]?></td>
        <td><?=$partes[2]?></td>
        <td><?=$partes[3]?></td>
        <td><?=$partes[4]?></td>
        <td><?=$partes[5]?></td>
        <td><?=$partes[6]?></td>
    </tr>

    <?php } ?>

</table>
<a class="btt1" href="../_HTML/Index.html">NOVO CADASTRO</a>
</body>
