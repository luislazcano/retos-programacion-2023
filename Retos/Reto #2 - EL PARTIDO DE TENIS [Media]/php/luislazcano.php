<?php
  $comando = '';
  $leyenda = ['Love','15','30','40'];
  $p1 = 0;
  $p2 = 0;
  while (strtolower($comando) != 'salir'){
      echo "¿De quien es el punto p1 o p2 : ";
      fscanf(STDIN, "%s", $comando);
      $comando = strtolower($comando);
      if($comando == 'p1' || $comando == 'p2'){
         $p1 = ($comando == 'p1') ? $p1 + 1 : $p1;
         $p2 = ($comando == 'p2') ? $p2 + 1 : $p2;
         $p1 = ($p1 < 0) ? 0 : $p1;
         $p2 = ($p2 < 0) ? 0 : $p2;
         if($p1 > 3 || $p2 > 3){
            $delta = abs($p1 - $p2);
            $ganador = ($p1 > $p2) ? 'P1' : 'P2';
            if ($delta > 1){
               echo "Tenemos Ganador y es $ganador\n";
               break;
            } else {
              if($delta == 0) {
                 echo "IGUALES \n";
              }else{
                 echo "Ventaja $ganador\n";
              }
            }
         } else {
           echo "p1 = $leyenda[$p1] \n";
           echo "p2 = $leyenda[$p2] \n";
        }
      }
 }
