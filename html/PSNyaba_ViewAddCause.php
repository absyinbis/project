<?php 

  
include("PSNyaba_Header.html");

 ?>

<div class="row" id="2">
	<div class="leftcolumn" style="width: 100%; float: right;">
    	<div class="card">
    		<div style="text-align: center; color: red;">
        <?php 
        if (isset($_SESSION["ERROR"]))
        {
          echo $_SESSION["ERROR"];
          $_SESSION["ERROR"]= ""; 
        }
        ?>
      </div>
    		<form action="../php/Add_Cause.php" method="post">

    			<div id="two">
		      	<div>نوع القضية</div>
		      	<input class="input-field" type="text" name="cause_type">

		      	<div>رقم المحظر</div>
		      	<input class="input-field" onkeypress="return onlyNumberKey(event)" type="text" name="report_id">

		      	<div>الرقم الوطني</div>
		      	<input class="input-field" onkeypress="return onlyNumberKey(event)" type="text" name="national_number">
		    	</div>
		    

		    	<div style="text-align: center;margin-top: 170px;">
		    	<input class="btn" type="submit" value="اضافة">
				</div>
			</form>
    	</div>
	</div>
</div>

 <?php 

include("Footer.html");

 ?>