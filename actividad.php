<?php

    $alumnos = ["Juan" => array(50,70,49,75,85,65)
               ,"Pedro" => array(40,76,69,55,60,40)
               ,"Carlos" => array(60,80,79,85,40,80)
               ,"Josh" => array(90,79,95,71,83,66)
               ,"Drake" => array(60,50,93,22,20,30)
               ,"Arlen"=> array(30,71,83,52,88,90)
               ,"Carmen" => array(100,40,29,25,30,60)
               ,"Adriana" => array(70,78,89,95,83,80)
               ,"Karla" => array(80,77,82,72,81,68)
               ,"Jazmin" => array(58,90,93,15,90,100)];

    encimaPromedio($alumnos,promedioGeneral($alumnos));

    echo "<br><br>";

    echo promedioMateria($alumnos);

    

    function promedioGeneral($vec){
        $prom = 0;
        $pg = 0;
        $al = 0;
        $nm = "";
        foreach($vec as $clave => $valor){
            echo "$clave --> ";
            foreach($valor as $i => $e){
                echo "$e,";
                $prom += $e; 
            }
            $prom = $prom/6;
            if($prom > $al){
                $al = $prom;
                $nm = $clave;
            }
            echo "<br>promedio : $prom<br>";
            $pg += $prom;
            $prom = 0;
            echo "<br><br>";
        }

        echo "<br>$nm con mejor promedio : $al<br><br>";

        $prom = $pg/10;

        echo "<br>Promedio General del Grupo : $prom<br><br>";

        return $prom;
    }

    function promedioMateria($vec){
        $m = 0;$m1 = 0;$m2 = 0;$m3 = 0;$m4 = 0;$m5 = 0;
        foreach($vec as $c => $v){
            $m += $v[0];
            $m1 += $v[1];
            $m2 += $v[2];
            $m3 += $v[3];
            $m4 += $v[4];
            $m5 += $v[5];
        }

        $m = $m/10;
        $m1 = $m1/10;
        $m2 = $m2/10;
        $m3 = $m3/10;
        $m4 = $m4/10;
        $m5 = $m5/10;

        $materias = ["materia1" =>$m,"materia2" =>$m1,"materia3" =>$m2,"materia4" =>$m3,"materia5" =>$m4,"materia6" =>$m5];

        foreach($materias as $p => $val){
            echo "<br>promedio de $p = $val<br>";
        }
    }

    function encimaPromedio($vec,$promedio){
        $prom = 0;
        foreach($vec as $clave => $valor){
            foreach($valor as $i => $e){
                $prom += $e; 
            }
            $prom = $prom/6;
            if($prom > $promedio){
                echo "<br><br>$clave esta por encima del promeedio general<br>";
            }
            $prom = 0;
        }  
        
        echo "<br><br>";
    }

?>