<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ประมวลผล โปรแกรมคำนวณอัตราแลกเปลี่ยนเงินตราต่างประเทศ</title>
<link rel="stylesheet" type="text/css" href="css/style-process.css">
<!-- <style type="text/css">

body {
    background: #151767;
}

</style> -->
</head>

<body>
<div align="center">
   
  <div class="type">
      <span>Result</span>
    
    </div>

<div class="box-cal">
  <?php
  $money=$_POST['money'];   
  $coin=$_POST['coin'];
 
 
  switch ($coin) {
 
    case 1:
    $coin_m=3.7;
    $sum=$money*$coin_m;
    // echo "1 บาทไทย (THB) = ".$coin_m."  เงินเยนของญี่ปุ่น (JPY)"."<br><br>";
    echo"Amount of Money ".number_format($money,2)." Baht =  ".number_format($sum,2)."  Japan(JPY)";
    break; 
    
   case 2:
    $coin_m=32.86;
    $sum=$money*$coin_m;

    echo "Amount of Money ".number_format($money,2)." Baht  =  ".number_format($sum,2)." Korea Won (KRW)";
    break;    
   
   case 3:
    $coin_m=0.03;
    $sum=$money*$coin_m;
    echo "Amount of Money ".number_format($money,2)." Baht =  ".number_format($sum,2)." US Dollar(USD)";
    break;
  
   
  }
 
  ?>
 
 </div>
</div>

<div class="footer"><p>Copyright  ©  2017  By Lalita  Boonyingyong  13570295.  All Rights Reserved</p></div>


</body>
</html>

