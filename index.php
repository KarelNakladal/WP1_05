<?php
  $homelessMoney=107 ;
  $vodkaPrice=119 ;
  $cigarett=100 ;
  $both=$vodkaPrice + $cigarett;
  
  if ($homelessMoney >= $both) {
    $answer="Zakoupeno" ;
    $zbytek = $homelessMoney - $both ;
  } 
  elseif ($homelessMoney >= $vodkaPrice) {
    $answer="Vodka Koupena" ;
    $zbytek = $homelessMoney - $vodkaPrice ;
  } 
  elseif ($homelessMoney >= $cigarett) {
    $answer="Cigarety Koupeny" ;
    $zbytek = $homelessMoney - $cigarett ;
  } 
  else {
    $answer="Jdi žebrat dál";
    $zbytek = $homelessMoney;
  }
  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>Cena vodky: <?=$vodkaPrice?> </br>
<br>Cena cigaret: <?=$cigarett?> </br>
     <br>Peníze bezdomovce před koupí:  <?=$homelessMoney?> </br>       
         <br><?=$answer?></br>
      <br>Bezdomovci po návštěvě večerky zbývá: <?=$zbytek?></br>  
</body>
</html>