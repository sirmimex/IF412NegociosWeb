<?php
//ejemplo de arreglos en PHP

$arreglo=array(1,2,3,4,"texto",false,true);

//motivos de depuracion

print_r($arreglo);
echo "<br/>";

$arreglo2=array("Nombre"=>"Wilmer","Apellido"=>"Lainez","Edad"=>"00");
print_r($arreglo2);
echo "<br/>";

$arreglo2[]="Esto no tiene llave";
$arreglo2["titulo"]="Sir";
print_r($arreglo2);
echo "<br/>";

$personas=array();
$personas[]=$arreglo2;
$personas[]=$arreglo;
print_r($personas);
echo "<br/>";
/*
$arreglo2["locura"]=$personas;
$arreglo2[0]=$personas;
print_r($personas);
echo"<br/>";
*/
foreach($arreglo2 as $key =>$value){
    echo "$key ->";
    if(is_array($value)){
        foreach($value as $key2=>$value2){
            echo "<br/>.................$key2 -> $value2";
        }
    }else{
        echo $value;
    }
    echo "<br/>";
}
?>