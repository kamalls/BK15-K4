<?php
function validuser($user){
  $len = strlen($user);
  $cek = preg_match("/(^[a-z])(.*[a-z_]$)/", $user);
  if ($len < 5 || $len > 8 || !$cek) {
    echo "$user = false, length = $len\n";
  }else {
    echo "$user = true, length = $len\n";
  }
}
function validpass($pass){
  $len = strlen($pass);
  $cek = preg_match("/[A-Za-z0-9!]/", $pass);
  if ($cek && $len === 9) {
    echo "$pass = true, length = $len\n";
  }else {
    echo "$pass = false, length = $len\n";
  }
}
echo "Validasi Username\n";
validuser('mustofa_');
validuser('_mustofa');
validuser('mustofa');
validuser('mustofakamal');
echo "\nValidasi Password\n";
validpass('mUsT0f4!!');
validpass('c4rlMax!!');
validpass('musTo4!!');
validpass('musTof4k4Mal');
?>
