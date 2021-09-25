<!DOCTYPE html>
<html><center>
   
    <h1>Calculadora Compensar</h1>

    
<head> <!-- aqui encontraremos lo que es el encabezado de la 
pagina y su titulo-->

<title>Operaciones Compensar</title>




<h2> Realiza tus operaciones mas raido y efectivo</h2>








</head>
<body>

<form id="Formulario" name="">
    <label>Ingrese primer Digito: </label>
    <input type="number" name="" id="numero1" autofocus placeholder="Digite el valor">
    </br>
</br>
<label>Ingrese Segundo Digito: </label>
<input type="number" name="" id="numero2" placeholder="Digite el valor">

</br>
</br>


<button onclick="Borrar();"><--</button>
<button type="button" onclick="sumar();">+</button>
<button type="button" onclick="restar();">-</button>
<button type="button" onclick="multiplicar();">*</button>
<button type="button" onclick="dividir();">/</button>
<p>El total es: <span id="resultado"></p>

</form>

    

<script>
    function limpiar(){
        documen.getElementById('Formulario').reset();
    }
    function sumar() {
        var x = parseInt(document.getElementById('numero1').value);
        var y = parseInt(document.getElementById('numero2').value);
        alert ("Su Operacion esta siendo procesada");
        document.getElementById('resultado').innerHTML = x+y;
    
    }
    function restar() {
        var x = parseInt(document.getElementById('numero1').value);
        var y = parseInt(document.getElementById('numero2').value);
        alert ("Su Operacion esta siendo procesada");
        document.getElementById('resultado').innerHTML = x-y;
    
    }
    function multiplicar() {
        var x = parseInt(document.getElementById('numero1').value);
        var y = parseInt(document.getElementById('numero2').value);
        alert ("Su Operacion esta siendo procesada");
        document.getElementById('resultado').innerHTML = x*y;
    
    }
    function dividir() {
        var x = parseInt(document.getElementById('numero1').value);
        var y = parseInt(document.getElementById('numero2').value);
        alert ("Su Operacion esta siendo procesada");
        document.getElementById('resultado').innerHTML = x/y;
    
    }
</script>


</body>

<body>

<hr>
<form action="index.php" method="POST">
<!-- En este apartado encontramos lo que es los diferentes espacios 
para introducir los valores-->
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
    echo "<h2>PRECIOS</h2></br>";
    echo "Total Precio Sin Descuento: " . $total . "<br>";
    echo "Descuento Depositado: " . $desc . "<br>";
    echo "Total precio Final: " . $totaldesc;
}


?>
</body>
<!-- A continuacion encontramos diferentes funciones para realizar -->



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