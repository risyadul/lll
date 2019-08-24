<?
function draw_line($string = "BOOTCAMP")
{

    $str = str_split($string, 1);
    $jml = count($str);
    for ($i=0; $i < $jml; $i++) { 
        for ($y=0; $y < $i; $y++) { 
            echo '&nbsp&nbsp&nbsp&nbsp';
        }
        echo $str[$i];
        echo "<br>";
    }

}
