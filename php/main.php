<?php
$nome = $_POST["nome"];
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

$linha =$nome."|".$n1."|".$n2. PHP_EOL;
file_put_contents("tab.txt", $linha, FILE_APPEND);
header("Location:produto.php");
exit;
?>