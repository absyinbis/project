<?php
session_start();
include("Admin_Header.html");
require_once  '../php/lib_db.php';
$account = unserialize($_SESSION["ACCOUNT"]);

if ($_SERVER['REQUEST_METHOD'] === 'POST')
  $Statistics = getStatistics(["ps_id"=> $_POST["ps_id"],"access"=> 0,"startdate"=> $_POST["startdate"],"enddate"=> $_POST["enddate"]]);
else
  $Statistics = getStatistics(["ps_id"=> 0]);
?>



<div class="row">
  <div class="leftcolumn" style="width: 100%; float: right;">
    <div class="card">

      <div style="text-align: center;">

        <form action="" method="post">
          <select name="ps_id">
            <option value="0">الكل</option>
            <?php 
              require_once  '../php/lib_db.php';
              $ps = getPoliceStations();
              foreach ($ps as $pss){
            ?> 
            <option value="<?=$pss->getId()?>"><?=$pss->getName()?></option>
            <?php
            } 
             ?>
          </select>

          <input id="date1" type="date" name="startdate" onchange="setrequired()">

          <input id="date2" type="date" name="enddate" onchange="setrequired()"> 

          <input type="submit" value="Send data">

        </form>
      </div>

      <table style="width: 100%; height: 90%;">
      	<tr>
      		<td class="celi" style="background-image: url(../image/user.png);">
            <div class="footer"> <?=$Statistics["user"]?> </div>
      		</td>
          <td class="celi" style="background-image: url(../image/law.png);">
            <div class="footer"> <?=$Statistics["cause"]?> </div>
          </td>
      		<td class="celi" style="background-image: url(../image/wanted.png);">
            <div class="footer"> <?=$Statistics["wanted"]?> </div>
      		</td>
      	</tr>
      	<tr>
          <td class="celi" style="background-image: url(../image/car.png);">
            <div class="footer"> <?=$Statistics["carstolen"]?> </div>
          </td>
          <td class="celi" style="background-image: url(../image/report.png);">
            <div class="footer"> <?=$Statistics["report"]?> </div>
          </td>
          <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') { ?>
          <td class="celi" style="background-image: url(../image/jail.png);">
            <div class="footer"> <?=$Statistics["police"]?> </div>
          </td>
        <?php }elseif($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["ps_id"] == 0) { ?>
          <td class="celi" style="background-image: url(../image/jail.png);">
            <div class="footer"> <?=$Statistics["police"]?> </div>
          </td>
        <?php } ?>
        </tr>
      </table>
    </div>
  </div>
</div>

<?php
include("Footer.html");
?>