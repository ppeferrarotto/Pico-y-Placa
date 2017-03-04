<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pico y Placa</title>
  </head>
  <body>
     <?php
     $matricula=$_POST["matricula"];
     $matricula=substr($matricula,-1);
     $semana=$_POST["semana"];
     $tiempo=$_POST["tiempo"];
     $tiempo1=$_POST["tiempo1"]; //7:00
     $tiempo2=$_POST["tiempo2"];//9:30
     $tiempo3=$_POST["tiempo3"];//16:00
     $tiempo4=$_POST["tiempo4"];//19:30
     if ($matricula=="1" && $semana=="lunes" && $tiempo>=$tiempo1 && $tiempo<=$tiempo2) {
       echo "El Auto no puede circular";
     }
     elseif ($matricula=="1" && $semana=="lunes" && $tiempo>=$tiempo3 && $tiempo<=$tiempo4) {
      echo "El Auto no puede circular";
     }
     elseif ($matricula=="2" && $semana=="lunes" && $tiempo>=$tiempo1 && $tiempo<=$tiempo2) {
       echo "El Auto no puede circular";
     }
     elseif ($matricula=="2" && $semana=="lunes" && $tiempo>=$tiempo3 && $tiempo<=$tiempo4) {
      echo "El Auto no puede circular";
     }
     elseif ($matricula=="3" && $semana=="martes" && $tiempo>=$tiempo1 && $tiempo<=$tiempo2) {
       echo "El Auto no puede circular";
     }
     elseif ($matricula=="3" && $semana=="martes" && $tiempo>=$tiempo3 && $tiempo<=$tiempo4) {
      echo "El Auto no puede circular";
}
     elseif ($matricula=="4" && $semana=="martes" && $tiempo>=$tiempo1 && $tiempo<=$tiempo2) {
       echo "El Auto no puede circular";
}
      elseif ($matricula=="4" && $semana=="martes" && $tiempo>=$tiempo3 && $tiempo<=$tiempo4) {
      echo "El Auto no puede circular";
}
  elseif ($matricula=="5" && $semana=="miercoles" && $tiempo>=$tiempo1 && $tiempo<=$tiempo2) {
  echo "El Auto no puede circular";
}
    elseif ($matricula=="5" && $semana=="miercoles" && $tiempo>=$tiempo3 && $tiempo<=$tiempo4) {
    echo "El Auto no puede circular";
}
  elseif ($matricula=="6" && $semana=="miercoles" && $tiempo>=$tiempo1 && $tiempo<=$tiempo2) {
    echo "El Auto no puede circular";
}
  elseif ($matricula=="6" && $semana=="miercoles" && $tiempo>=$tiempo3 && $tiempo<=$tiempo4) {
    echo "El Auto no puede circular";
}
elseif ($matricula=="7" && $semana=="jueves" && $tiempo>=$tiempo1 && $tiempo<=$tiempo2) {
echo "El Auto no puede circular";
}
  elseif ($matricula=="7" && $semana=="jueves" && $tiempo>=$tiempo3 && $tiempo<=$tiempo4) {
  echo "El Auto no puede circular";
}
elseif ($matricula=="8" && $semana=="jueves" && $tiempo>=$tiempo1 && $tiempo<=$tiempo2) {
  echo "El Auto no puede circular";
}
elseif ($matricula=="8" && $semana=="jueves" && $tiempo>=$tiempo3 && $tiempo<=$tiempo4) {
  echo "El Auto no puede circular";
}
elseif ($matricula=="9" && $semana=="viernes" && $tiempo>=$tiempo1 && $tiempo<=$tiempo2) {
echo "El Auto no puede circular";
}
  elseif ($matricula=="9" && $semana=="viernes" && $tiempo>=$tiempo3 && $tiempo<=$tiempo4) {
  echo "El Auto no puede circular";
}
elseif ($matricula=="0" && $semana=="viernes" && $tiempo>=$tiempo1 && $tiempo<=$tiempo2) {
  echo "El Auto no puede circular";
}
elseif ($matricula=="0" && $semana=="viernes" && $tiempo>=$tiempo3 && $tiempo<=$tiempo4) {
  echo "El Auto no puede circular";
}
     else {
       echo "El auto Puede circular";
     }

?>

  </body>
</html>
