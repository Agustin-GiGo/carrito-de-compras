<?php 
echo "<h1 align='center'>FELICIDADES</h1> <h2 align='center'>acaba de comprar</h2>"; 
foreach($_GET as $prod => $unidades) { 
echo "<p align='center'>$unidades $prod</p>"; 
} 
?>
<h2 align='center'>Gracias por su compra</h2> 
<h2>Vuelva pronto</h2> 
<a href="productos.php">TERMINAR</a>