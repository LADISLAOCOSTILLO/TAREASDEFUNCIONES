<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h2 id ="centrado"> </h2>
    </header>
    <section>
        <h4>FUNCION ISSET</h4>
    <?php 
   
    //FUNCION ISSET  determina si una variable ha sido declarada y su valor no es NULO
    $TITULO="";
    IF (ISSET($TITULO1)){
        ECHO "VARIABLE TIENE CONTENIDO";
    }else{
        ECHO "VARIABLE SIN CONTENIDO";
    }
    ?>
    <h4>FUNCION UNSET</h4>
    <?php 
    //FUNCION unset() destruye las variables especificadas.
        $TITULO="ALGO DE TEXTO";
            unset($TITULO);
        if (isset($TITULO)){
        ECHO "VARIABLE TIENE CONTENIDO"; 
    }else{
        ECHO "VARIABLE SIN CONTENIDO"."<BR>";  
    }
    ?> 
    <h4>FUNCION GETTYPE</h4>
    <?php 
    // FUNCION gettype  Permite obtener el tipo de datos de una determinada variable. Su formato es
    $nombre='Juan Perez'; 
    echo " EL NOMBRE ORIGINAL ES    :".$nombre;
    echo "<br>NOMBRE ES DE TIPO     :" .gettype($nombre); 
    $sueldo=3050.78; 
    echo "<br> EL SUELDO ES         :".$sueldo;
    echo "<br>NOMBRE ES DE TIPO     :" .gettype($sueldo);
    $A=10;
    echo "<br> EL VALOR ORIGINAL ES : ".$A;
    echo " <br>TIPO DE DATO :" .gettype($A);
      ?>
    <h4>FUNCION SETTYPE</h4>
    <?php
    $var = "14.19";
    echo " EL VALOR ORIGINAL ES   :".$var;
	settype($var, 'int'); 
	//var_dump($var); 
    echo " <br>TIPO DE DATO CAMBIADO ES:"  .$var;
    ?>

    <h4>FUNCION EMPTY </h4>
    <?php
    $clve=" " ;
    if (empty($clve)){
        echo "La variable SÍ está vacía, su contenido es".$clve;
    }else{
    echo "La variable NO está vacía, su contenido es".$clve;
    }
    unset ($clve);
    if (empty($clve))
    {
        /echo "La variable SÍ está vacía, su contenido es:".$clve;
    }
    else{
        echo "La variable NO está vacía, su contenido es:".$clve;
    }
    
    ?>

</body>
</html>