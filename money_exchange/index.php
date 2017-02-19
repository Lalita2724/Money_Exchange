<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> โปรแกรมคำนวณอัตราแลกเปลี่ยนเงินตราต่างประเทศกับเงินบาทไทย</title>
<link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/index-style.css">
<!-- <style type="text/css">

body {
    background-color:#FFF46C;
    color:#000;
}

</style> --></head>

<body>
    <div class="type">
      <span>Money</span>
      <span>currency conversions </span>
      <span>Exchange</span>    
    </div>
 
    
        <form action="process.php" method="post">


    <div class="box-cal">


    <table width="500" align="center" >

    
    <div class="amount">Amount of Money : </div> 
        <form> 
          <input type="text" name="money">
        </form> 
        <div class="bath">Thai Baht</div> 
    

      <div class="select-cur"> Select a currency : </div>
        <div class="box1">


        <div class="wrap">

  <select class="custom-select" name="coin">
      <option value="1" >Japan(JPY)</option>    
        <option value="2" >Korea Won(KRW)</option>
        <option value="3" >US Dollar (USD)</option>
  </select>

</div>
      <!-- <label>
      <select name="coin" >
      	<option value="1" >เงินเยนของญี่ปุ่น (JPY)</option>    
        <option value="2" >ปอนด์ (GBP)</option>
        <option value="3" >สหดอลลาร์สหรัฐอเมริกา (USD)</option>
                             
              </select></label> -->
    


<!-- <button class="btn button">
              <p>calculate</p>
          </button> btn search -->
   

       <div class="btn button"><input type="submit" value="Calculate" ></div>
      

    </div>
    <tr>
      <td colspan="2" style="font-size:14px; color:#000;" align="center"></td>
    </tr>

  </table>
<!-- <div align="center"></div> -->


</div>
</form>

<div class="footer"><p>Copyright  ©  2017  By Lalita  Boonyingyong  13570295.  All Rights Reserved</p></div>

</body>
</html>