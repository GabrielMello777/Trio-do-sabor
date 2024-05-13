<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../imgs/logo.png">
    <title>Cardapio</title>
</head>


<?php
session_start();


if (isset($_POST['casa'])) {
    $_SESSION['contador_casa'] = isset($_SESSION['contador_casa']) ? $_SESSION['contador_casa'] + 1 : 1;
} else {
    $_SESSION['contador_casa'] = isset($_SESSION['contador_casa']) ? $_SESSION['contador_casa'] : 0;
}

$contador_casa = $_SESSION['contador_casa'];

if (isset($_POST['doritos'])) {
    $_SESSION['contador_doritos'] = isset($_SESSION['contador_doritos']) ? $_SESSION['contador_doritos'] + 1 : 1;
} else {
    $_SESSION['contador_doritos'] = isset($_SESSION['contador_doritos']) ? $_SESSION['contador_doritos'] : 0;
}

$contador_doritos = $_SESSION['contador_doritos'];

if (isset($_POST['4'])) {
    $_SESSION['contador_4'] = isset($_SESSION['contador_4']) ? $_SESSION['contador_4'] + 1 : 1;
} else {
    $_SESSION['contador_4'] = isset($_SESSION['contador_4']) ? $_SESSION['contador_4'] : 0;
}

$contador_4 = $_SESSION['contador_4'];

if (isset($_POST['p'])) {
    $_SESSION['contador_p'] = isset($_SESSION['contador_p']) ? $_SESSION['contador_p'] + 1 : 1;
} else {
    $_SESSION['contador_p'] = isset($_SESSION['contador_p']) ? $_SESSION['contador_p'] : 0;
}

$contador_p = $_SESSION['contador_p'];



if (isset($_POST['eq'])) {
    $_SESSION['contador_eq'] = isset($_SESSION['contador_eq']) ? $_SESSION['contador_eq'] + 1 : 1;
} else {
    $_SESSION['contador_eq'] = isset($_SESSION['contador_eq']) ? $_SESSION['contador_eq'] : 0;
}

$contador_eq = $_SESSION['contador_eq'];

if (isset($_POST['ed'])) {
    $_SESSION['contador_ed'] = isset($_SESSION['contador_ed']) ? $_SESSION['contador_ed'] + 1 : 1;
} else {
    $_SESSION['contador_ed'] = isset($_SESSION['contador_ed']) ? $_SESSION['contador_ed'] : 0;
}

$contador_ed = $_SESSION['contador_ed'];

if (isset($_POST['b'])) {
    $_SESSION['contador_b'] = isset($_SESSION['contador_b']) ? $_SESSION['contador_b'] + 1 : 1;
} else {
    $_SESSION['contador_b'] = isset($_SESSION['contador_b']) ? $_SESSION['contador_b'] : 0;
}

$contador_b = $_SESSION['contador_b'];

if (isset($_POST['a'])) {
    $_SESSION['contador_a'] = isset($_SESSION['contador_a']) ? $_SESSION['contador_a'] + 1 : 1;
} else {
    $_SESSION['contador_a'] = isset($_SESSION['contador_a']) ? $_SESSION['contador_a'] : 0;
}

$contador_a = $_SESSION['contador_a'];

?>

<style>
div{
            border-radius: 5px;
            background-color:#999999;
            max-width: 500px;
            font-size: 30px;
        }

a{
    color: white;
    font-size: 30px;

}

</style>
<body bgcolor="#4a4a4a">
<center>
<img src="../imgs/logo.png">

<h1>Hamburgueres</h1>

<form method="post"  > 

<div>
    <h4> X-Casa (12R$)</h4>
    
    <img src="../imgs/H-classico.jpg" height="100" width="120">

    <p>Quantidade deste lanche: <?php echo  $contador_casa; ?></p>
        <input type="hidden" name="contador_casa" value="<?php echo $contador_casa; ?>">
        <button type="submit" name="casa">+</button>
  
</div>

<div>
    <h4> X-Doritão (16R$) </h4>
    
    <img src="../imgs/doritao.png" height="100" width="120">

    <p>Quantidade deste lanche: <?php echo  $contador_doritos; ?></p>
        <input type="hidden" name="contador_doritos" value="<?php echo  $contador_doritos; ?>">
        <button type="submit" name="doritos">+</button>

</div>
<h1>Pizzas</h1>

<div>
    <h4> Pizza 4 queijos (30R$)</h4>
    
    <img src="../imgs/4.png" height="100" width="120">

    <p>Quantidade desta pizza: <?php echo $contador_4; ?></p>
        <input type="hidden" name="contador_4" value="<?php echo  $contador_4; ?>">
        <button type="submit" name="4">+</button>
  
</div>

<div>
    <h4> Pizza de Peperoni (32R$) </h4>
    
    <img src="../imgs/p.png" height="100" width="120">

    <p>Quantidade desta pizza: <?php echo  $contador_p; ?></p>
        <input type="hidden" name="contador_p" value="<?php echo  $contador_p; ?>">
        <button type="submit" name="p">+</button>

       
</div>
<h1>Esfihas</h1>

<div>
    <h4> Esfihha de queijo (4R$) </h4>
    
    <img src="../imgs/efq.png" height="100" width="120">

    <p>Quantidade desta esfihha: <?php echo  $contador_eq; ?></p>
        <input type="hidden" name="contador_eq" value="<?php echo  $contador_eq; ?>">
        <button type="submit" name="eq">+</button>
        </div>

        <div> 
        <h4> Esfiha doce (8R$) </h4>
    
    <img src="../imgs/ed.png" height="100" width="120">

    <p>Quantidade desta esfiha: <?php echo  $contador_ed; ?></p>
        <input type="hidden" name="contador_ed" value="<?php echo  $contador_ed; ?>">
        <button type="submit" name="ed">+</button>


       
</div>

<h1>Adicionais</h1>

<div>
    <h4> Bata frita (6R$) </h4>
    
    <img src="../imgs/b.png" height="100" width="120">

    <p>Quantidade desta adicional: <?php echo  $contador_b; ?></p>
        <input type="hidden" name="contador_b" value="<?php echo  $contador_b; ?>">
        <button type="submit" name="b">+</button>
        </div>

        <div> 
        <h4> Anel de Cebola (5R$)</h4>
    
    <img src="../imgs/a.png" height="100" width="120">

    <p>Quantidade deste adicional: <?php echo  $contador_a; ?></p>
        <input type="hidden" name="contador_a" value="<?php echo  $contador_a; ?>">
        <button type="submit" name="a">+</button>
    </div>


</form>


<form  action="resultados.php" method="post" > 

<label for="Nome">Nome:</label> 

<input type="text" name="nome" placeholder="informe seu nome"> <br><br>

<label for="Nome">Endereço:</label> 

<input type="text" name="endereco" placeholder="Informe Seu Endereço"> <br><br>

<button   type="Submit" value="botao"  > Enviar</button> <br>
</form>





</center>
</body>
</html>