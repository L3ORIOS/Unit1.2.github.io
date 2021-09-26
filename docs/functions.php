<?php
        
        function getSpanishDay($Var){
               switch($Var)
               {
                    case 'Sunday':
                        return "Domingo";
                        break; 
                    case 'Monday':
                        return "Lunes";
                        break;  
                    case 'Tuesday':
                        return "Martes";
                        break; 
                    case 'Thursday':
                        return "Jueves";
                        break;   
                    case 'Wednesday':
                        return "Miercoles";
                        break;
                    case 'Friday':
                        return "Viernes";
                        break;
                    case 'Saturday':
                        return "Sabado";
                        break;       
               };     
        };
        function getSpanisMonth ($var2) {
            $verifica = (int)$var2;

                     $returnValue = match($verifica)
                     {
                        1 => 'Enero',
                        2 => 'Febrero',
                        3 => 'Marzo',
                        4 => 'Abril',
                        5 => 'Mayo',
                        6 => 'Junio',
                        7 => 'Julio',
                        8 => 'Agosto',
                        9 => 'Septiembre',
                        10 => 'Octubre',
                        11 => 'Noviembre',
                        12 => 'Diciembre',
                        default => 'It is not a mount',
                    };
                    
                    return $returnValue;
        };
        
        
        function spanishDate (){
            $Day = date('l',time());
            $NumDay = date('d',time());
            $Month = date('n',time());
            $Year = date('Y',time());
            
            $Dia = getSpanishDay($Day);
            $Mes = getSpanisMonth($Month);
            
            
            echo"<p>";
            echo$Dia.", ".$NumDay." de ".$Mes." de ".$Year;
            echo"</p>";
        };

        function factorial ($num){
            if(!is_numeric($num)){
                echo"<p>";
                echo"Tiene que ser un numero.";
                echo"</p>";
            }else{
                $resultado = $num;
                for($i=$num-1; $i > 1; $i--){
                    $resultado*=$i;
                };
                echo"<p>";
                echo"The factorial of number 5 is... ".$resultado;
                echo"</p>";
            };


        };

        function multiplication($num){
            echo"<br>";
            echo"<table>";
            for($i=$num;$i>=0;$i--){
                $resultado = $num*$i;
                echo"<tr>";
                echo $num." x ".$i." = ".$resultado;
                echo"</tr>";
                echo "<br>";
            }
            echo"</table>";

        }

        function pricelt($num){
            if(is_numeric($num)){
                if($num < 100){
                    echo"<p>";
                    echo"Initial price: ".$num."€ (No discount is applied).";
                    echo"</p>";
                    echo"<p>";
                    echo"Final Price: ".$num."€";
                    echo"</p>";
                }
                else if($num>=100 & $num<500){
                    $Diez=$num*.90;
                    echo"<p>";
                    echo"Initial price: ".$num."€ (10% is discounted.).";
                    echo"</p>";
                    echo"<p>";
                    echo"Final Price: ".$Diez."€";
                    echo"</p>";
                }
                else if($num>=500){
                    $Quince=$num*.85;
                    echo"<p>";
                    echo"Initial price: ".$num."€ (15% is discounted.).";
                    echo"</p>";
                    echo"<p>";
                    echo"Final Price: ".$Quince."€";
                    echo"</p>";
                };
            }else{
                echo"In has to be a number.";
            }
            

        }


?>