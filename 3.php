<?php

function deret($jml){
  for ($i=1; $i <= $jml ; $i++) {
    if ($i % 3 == 0) {
      echo "arka,";
    }elseif ($i % 7 == 0) {
      echo "demy,";
    }else{
      echo "$i,";
    }
  }
}
deret(21);

?>
