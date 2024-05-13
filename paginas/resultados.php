<?php 

session_start();

$Rcasa= $_SESSION['contador_casa'];
$Rdoritos=$_SESSION['contador_doritos'];
$R4= $_SESSION['contador_4'];
$Rp= $_SESSION['contador_p'];
$Req= $_SESSION['contador_eq'];
$Red= $_SESSION['contador_ed'];
$Rb=$_SESSION['contador_b'];
$Ra= $_SESSION['contador_a'];

$nome= $_POST["nome"];
$endereco= $_POST["endereco"];

$Vcasa= $Rcasa*12;
$Vdoritos= $Rdoritos*16;
$V4= $R4*30;
$Vp= $Rp*32;
$Veq= $Req*4;
$Ved= $Red*8;
$Vb= $Rb*6;
$Va= $Ra*5;

$total= $Vcasa+$Vdoritos+$V4+$Vp+$Veq+$Ved+$Vb+$Va;

$_SESSION["totalA"]= $total;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imgs/logo.png">
    <title>Pedido Anotado</title>
</head>
<body bgcolor="#4a4a4a">
<center> 
<?php

echo '<img src="../imgs/logo.png" width="100" heigth="100">';


echo '<h2>';

echo "pedido do $nome";

echo '<br>';

if ($Rcasa>=1) {
    echo ("serão $Rcasa X-casa, o valor será:$Vcasa");
}

echo '<br>';

if ($Rdoritos>=1) {
    echo ("serão $Rdoritos X-doritão, o valor será:$Vdoritos");
}
echo '<br>';
if ($R4>=1) {
    echo ("serão $R4 Pizza(s) 4 queijo, o valor será:$V4");
}
echo '<br>';
if ($Rp>=1) {
    echo ("serão $Rp Pizza(s) De peperron, o valor será:$Vp");
}
echo '<br>';
if ($Req>=1) {
    echo ("serão $Req Esfiha(s) de queijo, o valor será:$Veq");
}
echo '<br>';

if ($Red>=1) {
    echo ("serão $Red Esfiha(s) doce(s), o valor será:$Ved");
}
echo '<br>';

if ($Rb>=1) {
    echo ("serão $Rb batata(s) frita(s), o valor será:$Vb");
}
echo '<br>';
if ($Ra>=1) {
    echo ("serão $Ra anel(s) de cebola, o valor será:$Va");
}
echo '<br>';

echo "o valor total será: $total";
echo '<br>';

?>

<form action="../index.php" method="post">

<label for="conhecer"></label><br>

Pague com pix: 525.354.708-88 <br>

ou pelo qr code:<br> <img src="../imgs/qr.jpg" width="100" heigth="100"> <br>


<?php

echo "Endereço: $endereco";

?>
<br>
<button type="submit" name="confirmar">Confirmar Pedido</button> <br>

</form>

<?php



if (isset($_POST['confirmar'])) {
    $_SESSION['confirmar'] = true;
} else {
    $_SESSION['confirmar'] = false;
}

if ($_SESSION['confirmar'] = true) {

    $_SESSION['contador_casa'] = 0;
    $_SESSION['contador_doritos'] = 0;
    $_SESSION['contador_4'] = 0;
    $_SESSION['contador_p'] = 0;
    $_SESSION['contador_eq'] = 0;
    $_SESSION['contador_ed'] = 0;
    $_SESSION['contador_b'] = 0;
    $_SESSION['contador_a'] = 0;

}
?>
    
</center>
</body>
</html>