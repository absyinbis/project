<?php 
include("PSUser_Header.html");
 ?>

<div class="leftcolumn" style="width: 100%; float: right;">
    <div class="card">
    <form action="PSUser_PrintCause.php" method="post" target="_blank">	
    	<div class="center">
            <h1>استخراج شهادة براءة</h1>
            <br>
            <br>
    		<input placeholder="الرجاء ادخال الرقم الوطني هنا" class="input-field"  style="width: 50%;text-align: center;" type="text" name="nationalnumber" required>
    		<div style="text-align: center;">
    			<input class="btn" type="submit" value="استخراج">
    		</div>
    	</div>
    </form>
	</div>
</div>


 <?php 
include("Footer.html");
  ?>