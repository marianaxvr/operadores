<?php
// for - loop infinito
    for ($i = 0; $i < 1000; $i += 5) {

    if ($ > 200 && $i < 800) continue; //ou<= ou >=
    if ($i === 900) break;
    echo $i . "<br>";
// for para derrubar um servidor seria dessa forma: NÃO FAZER ISSO // se você erra a lógica, problema seu
    // for ($i = 0; $i < 10; $i--) {
        //   echo $i;  
   // }

}


?>