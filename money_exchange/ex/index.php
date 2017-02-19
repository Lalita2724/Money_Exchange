<?php

$input_money = 1200;

function exchange_japan_fuc ($values_money)
{
  $val_japan = null;
  $exchange_japan = 3.7;
  $val_japan = $values_money * $exchange_japan;
  $convert_float = number_format($val_us, 2, '.', '');
  echo "Japan Money : ".$val_japan." Yen<br>";

  return $val_japan;
}
function exchange_us_fuc ($values_money)
{
  $val_us = null;
  $exchange_us = 35;
  $val_us = $values_money / $exchange_us;
  $convert_float = number_format($val_us, 2, '.', '');
  echo "US Money : ".$convert_float." Dollar<br>";

  return $convert_float;
}

function exchange_kr_fuc ($values_money)
{
  $val_kr = null;
  $exchange_us = 32.55;
  $val_us = $values_money / $exchange_us;
  $convert_float = number_format($val_us, 2, '.', '');
  echo "Korea Money : ".$convert_float." KRW<br>";

  return $convert_float;
}

echo "Thai Money : ".$input_money." Bath<br>";
exchange_japan_fuc($input_money);
exchange_us_fuc($input_money);
exchange_kr_fuc($input_money);
 ?>
