<?php
$numero1=0;
$numero2=0;
$iteraciones=10;
$msg="";
$iteracionselecta=10;

if(isset($_POST["btnPrc"])){
    //numero1 elevado al numero 2
    $numero1=intval($_POST["numero1"]);
    $numero2=intval($_POST["numero2"]);
    $newValue=$numero1;
    for($i=1;$i<$numero2;$i++){
        $newValue*=$numero1;
    }
    $msg ="El valor: $numero1 a la potencia $numero2 es igual a $newValue";
}
if(isset($_POST["btnRev"])){
    //echo numero1 * iteracion(a la inversa)
    $numero1=intval($_POST["numero1"]);
   $iteraciones=intval($_POST["iteraciones"]);
   $contador=1;
   while($iteraciones>0){
    $msg .="$contador ). Producto:".($numero1*$iteraciones)."<br/>";
$contador++;
$iteraciones--;

   }   
}
if(isset($_POST["btnFac"])){
    //factorial numero2
    $numero2=intval($_POST["numero2"]);
    $newVal=$numero2;
    for($i=$numero2-1;$i>=1;$i--){
        $newVal*=$i;
    }
    $msg ="El valor factorial de $numero2 es: $newVal";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Ejercicio 2 Swicth y Ciclos</title>
    </head>
    <body>
        <h1>Ejemplo de Switch y Ciclos en PHP</h1>
        <form action="Ejercicio2.php" method="post">
            <label for="numero1">Número 1</label>
            <input type="text" id="numero1"
                   name="numero1" value="<?php echo $numero1; ?>"/>
            <br/>
            <label for="numero2">Número 2</label>
            <input type="text" id="numero2"
                   name="numero2" value="<?php echo $numero2; ?>"/>
            <br/>
            <label for="interaciones">Número de Iteraciones</label>
         <select name="iteraciones" id="iteraciones">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
            </select>
            <br/>
            <input type="submit" value="Procesar"
                   name="btnPrc" id="btnPrc"/>
            <input type="submit" value="Reservar"
                   name="btnRev" id="btnRev"/>
            <input type="submit" value="Factorial"
                   name="btnFac" id="btnFac"/>
        </form>
        <div>
        <?php echo $msg;?>
        </div>
    </body>
</html>
    