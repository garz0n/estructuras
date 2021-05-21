<?php
//Ejercicio 1
include ('header.php');
    $usuario = 'mmgr2106';
    $contra = '210604';

    if ($usuario != 'mmgr2106' or $contra != '210604'){
        print('<h3 class="alert alert-danger">El usuario o contraseña no son correctas</h3>');
    }else{
        echo'<h3 class="alert alert-info">Acceso permitido, Bienvenido</h3>';
    }
    echo'<h5>Usuario: '.$usuario.'</h5><br>';
    echo'<h5>Contraseña: '.$contra.'</h5><br>';

?>
<?php
//Ejercicio 2
include('ej2.php');
    $calif1 = 9;
    $calif2= 8;
    $calif3= 9;
    $calif = ($calif1 + $calif2 + $calif3)/3;
    echo '<h5>Calificación 1:'.$calif1.'</h5><br>';
    echo '<h5>Calificación 2:'.$calif2.'</h5><br>';
    echo '<h5>Calificación 3:'.$calif3.'</h5><br>';

    echo '<h2 class="alert alert-success">El promedio del alumno es: '.$calif.'</h2>';

    if ($calif<=5){
        echo '<h2 class="alert alert-danger">El alumno está reprobado</h2>';
    }else{
        print('<h2 class="alert alert-success">El alumno está aprobado</h2>');
    }

?>
<?php
//Ejercicio 3
include('ej3.php');
    $edad1 = 48;
    $edad2 = 36;
    $edad3 = 74;
    echo'<h6 align="left"> La edad 1 es: '.$edad1.'</h6>';
    echo'<h6 align="left"> La edad 2 es: '.$edad2.'</h6>';
    echo'<h6 align="left"> La edad 3 es: '.$edad3.'</h6>';

if ($edad1 > $edad2 and $edad1 > $edad3 and $edad2 > $edad3){
        echo '<br><h4 align="center">La edad mayor es: '.$edad1.'</h4><br>';
        echo '<br><h4 align="center">La edad menor es: '.$edad3.'</h4><br>';
    }else if ($edad2 > $edad1 and $edad2 > $edad3 and $edad3 > $edad1){
        echo '<br><h4 align="center">La edad mayor es: '.$edad2.'</h4><br>';
        echo '<br><h4 align="center">La edad menor es: '.$edad1.'</h4><br>';
    }else if ($edad3 > $edad1 and $edad3 > $edad2 and $edad1 > $edad2){
        echo'<br><h4 align="center">La edad mayor es: '.$edad3.'</h4><br>';
        echo '<br><h4 align="center">La edad menor es: '.$edad2.'</h4><br>';
    }else{
        print ('<br><h4 align="center">Son iguales</h4>');
    }
?>
<?php
    //Ejercicio 4
include('ej4.php');
    $dias = array('Lunes' => 1, 'Martes' => 2, 'Miércoles' => 3, 'Jueves' => 4, 'Viernes' => 5, 'Sábado' => 6, 'Domingo' => 7);
    foreach ($dias as $dia => $i){
        echo '<hr><h6 align="center">Día de la semana: '.$dia.' <br>Número de dia de la semana: '.$i.'</h6><br><hr>';
    }

?>
<?php
//Ejercicio 5
include('ejercicio5.php');

    $nombre = 'Mau Garzón Ruiz';
    $i = 1;
    while ($nombre <= 15 and $i <= 15){
        echo '<h6 align="center">'.$i. ' : '.$nombre.'</h6><br>';
        $i++;
}
?>
