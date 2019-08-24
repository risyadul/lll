<?
function prima($x = 1, $y = 1)
{
    for ($i=$x; $i <= 40 ; $i++) {     

        $t = 0;  
    
            for ($j=$y; $j <= $i ; $j++) {  
    
                if ($i % $j == 0) { 
                    $t++;
                }
               
            }
    
        if ($t == 2) {   
            echo "".$i.",";
        }
    }
}
