<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./kalkulator.css">

    <title>PROGRAM KALKULATOR</title>
  </head>
  <body>
    
    <?php
    $bc = ['C'];
    $b1 = [7,8,9,'+', 4,5,6,'-', 1,2,3,'*','.',0,'/','=','%'];
    
    $tombol='';
    if(isset($_POST['tombol']) && in_array($_POST['tombol'],$b1)){
        $tombol=$_POST['tombol'];
    }
    $hitungan='';
    if(isset($_POST['hitungan']) && preg_match('~^(?:[\d.]+[* / + - %]?)+$~',$_POST['hitungan'],$out)){
        $hitungan=$out[0];    
    }
    $tampilan=$hitungan.$tombol;
    
    if($tombol=='C'){
        $tampilan='';
    }elseif($tombol=='=' && preg_match('~^\d*\.?\d+(?:[* / + - %]\d*\.?\d+)*$~',$hitungan)){
        $tampilan.=eval("return $hitungan;");
    }



    echo "<form class='kalkulator' method='POST'>";
                echo "<input class='value' style='grid-column: span 4;' type='text' name='hitungan' value='$tampilan' placeholder='0'>";    
                    foreach(array_chunk($b1,4) as $chunk){
                        
                        foreach($chunk as $button){
                            echo "<button ",(sizeof($chunk)!=4?" ":"")," name='tombol' value='$button' class='num'>$button</button>";
                        }
                        
                    }
                        
                    foreach($bc as $clear){
                        echo "<button name='tombol' value='$clear' class=btn-'clear' style= 'grid-column: span 2; width: 120px; background: #ff3077;'>$clear</button>";
                    }
                   

    echo "</form>";
    ?>
  </body>
</html>