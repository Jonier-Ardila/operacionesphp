<html><center>
    <form>
    <h1>Calculadora Compensar</h1>

    
<head> <!-- aqui encontraremos lo que es el encabezado de la 
pagina y su titulo-->

<title>Operaciones Compensar</title>

<h2> Realiza tus operaciones mas raido y efectivo</h2>
</head>
<body>

<from method="post" action="operacion.php">
    
<td><input type="text" class="from-control" placeholder="Escribe tu operación" id="inputResultado"/></td>

</br>
</br>
<!-- En este apartado encontramos los diferentes botones los 
cuales se llegaran a implementar para casa funcion-->

<button type="button" onclick="reset();" class="btn btn-primary"><--</button>
<button type="button" onclick="agregarItem('+')" class="btn btn-primary">+</button>
<button type="button" onclick="agregarItem('-')" class="btn btn-primary">-</button>
<button type="button" onclick="agregarItem('*')" class="btn btn-primary">*</button>
<button type="button" onclick="agregarItem('/')" class="btn btn-primary">/</button>

</br>
</br>
<button type="button" onclick="calcular();" class="btn btn-primary">Calcular</button>
</br>
</br>
</br>

<button type="button" onclick="agregarItem(17.700);" class="btn btn-primary">Alquiler de Cancha</br> de futbol, desde: </br>$17.700</button>
<button type="button" onclick="agregarItem(23.500);" class="btn btn-primary">Clases de Taekwondo </br> desde: </br>$23.500</button>
<button type="button" onclick="agregarItem(21.300);" class="btn btn-primary">Clases de Futbol </br> desde: </br>$21.300</button>
<button type="button" onclick="agregarItem(25.800);" class="btn btn-primary">Clases de Baloncesto </br> desde: </br>$25.800</button>
<button type="button" onclick="agregarItem(39.900);" class="btn btn-primary">Clases de Futbol </br> femenino desde: </br>$39.900</button>

</br>
</br> 
</br> 
</br>
</br>
 </br> 
</br> 
<form action="index.php" method="POST">
<hr>
<h2> Realice el Descuento de su compra </br>de manera mas rapida y efectiva</h2>
</br>
 </br> 
<label for="precio">Escriba el Precio Total</label>
</br> 
<td><input type="text" placeholder="Precio Total" name="precio" id="precio"/></td>
</br>
<label for="desc">Escriba su Descuento</label>
</br> 
<td><input type="text" placeholder="Descuento" name="desc" id="desc"/></td>
</br>
</br> 
</br> 

<input type="submit" value="enviar" name="enviar" id="enviar">
</from>

</body>
<hr>
<?php
// En este apartado encontramos la condicion if para poder realizar 
// las diferentes operaciones
if(isset($_POST["enviar"])){
    $precio = $_POST["precio"];
    $desc = $_POST["desc"];
    $total = $precio;
    $descuento = ($desc/100)*$total;
    $totaldesc = $total - $descuento;
    echo "<h2>PRECIOS..</h2></br>";
    echo "Total Precio Sin Descuento: " . $total . "<br>";
    echo "Descuento Depositado: " . $desc . "<br>";
    echo "Total precio Final: " . $totaldesc;
}
?>
</form>
<!-- A continuacion encontramos diferentes funciones para realizar -->
</form>
<script>
    function reset() {
        edt = document.getElementById("inputResultado");
        edt.value="";
    }
    function agregarItem(item){
        edt = document.getElementById("inputResultado");
        valorViejo = edt.value;
        valorNuevo = valorViejo+item;
        edt.value=valorNuevo;
    }
    function calcular() {
        edt = document.getElementById("inputResultado");
        valor = edt.value;
        $.ajax({
            url:'calculo.php',
            method:'post',
            data: {'calculo':valor}
        }).done(function (resultado){
            edt.value = resultado;
        });
    }




</script>


<!--En este apartado encontramos el diseño de la pagina,
ya sea color de fondo y demas -->
<style>

form{
    padding: 50px 20px;
    background-color: #ededed;
    margin: calc(25% + 100px);
    margin-top:70px;
    padding-top: 28px;
    margin-bottom: 30px;
}
body {
    background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
}
    
</style>

</html>