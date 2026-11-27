<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>

<body>
    <?php
    $somaTotal = 0;
    $linhas = file("tab.txt", FILE_IGNORE_NEW_LINES);
    ?>

    <table border="1">
        <tr>
            <th>Nome Produto</th>
            <th>Valor Unitario</th>
            <th>Quantidade</th>
            <th>Total</th>
        </tr>

        <?php foreach ($linhas as $linha) {
            $partes = explode("|", $linha);
            $total = $partes[1] * $partes[2];
            $somaTotal = $somaTotal + $total;
            if ($total >= 100) {
                $cor = '#ff0000';
            } else {
                $cor = '#0044ff';
            }
            ?>
            <tr>
                <td><?= $partes[0] ?></td>
                <td><?= $partes[1] ?></td>
                <td><?= $partes[2] ?></td>
                <td style="color: <?= $cor ?>;"><?= $total ?></td>
            </tr>

        <?php } ?>
        <tr>
            <th></th>
            <th></th>
            <th>SOMA TOTAL</th>
            <th><?= $somaTotal ?></th>
        </tr>
    </table>

    <button><a href="index.html">Voltar</a></button>
</body>

</html>