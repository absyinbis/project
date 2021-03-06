<?php 
session_start();
if(!isset($_SESSION["ACCOUNT"]))
  header("Location:LoginView.php");
  
include("PS_Header.html");
require_once  '../php/lib_db.php';
require_once '../AES/AesCtr.php';
$account = unserialize($_SESSION["ACCOUNT"]);

if($_SERVER['REQUEST_METHOD'] === "POST")
    {
      $i = $_POST["search"];
      $sql = "SELECT `user`.*, `police_station`.`name` who FROM `user` 
              INNER JOIN `police_station` ON `user`.`ps_id` = `police_station`.`id` 
              where `user`.`state` = 1
              AND `user`.`ps_id` = '".$account->getWho()."'
              AND `user`.`name` like '%".$i."%'
              OR `user`.`username` like '%".$i."%'
              OR `user`.`id` like '%".$i."%'
              OR `user`.`phonenumber` like '%".$i."%'";
      $usr = Search($sql,'user');
    }
    else
      $usr = getUsersByPoliceStation($account->getWho());
 ?>

<script type="text/javascript" src="../AES/AesCtr.js"></script>

<div class="row" id="2">
  <div class="leftcolumn">
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
      
      <form action="PS_ViewUser.php" method="post">
      <div class="wrapper">
        <input type="text" class="input" name="search" placeholder="What are you looking for?">
        <div class="searchbtn" onClick="javascript:document.forms[0].submit()"><i class="fas">بحث</i></div>
      </div>
      </form>

      <div class="table-content">
        <table id="user_table" class="table">
          <tr>
            <th onclick="sortTable(0,'user_table')">رقم</th>
            <th onclick="sortTable(1,'user_table')">الاسم</th>
            <th onclick="sortTable(2,'user_table')">اسم المستخدم</th>
            <th onclick="sortTable(3,'user_table')">كلمة المرور</th>
            <th onclick="sortTable(4,'user_table')">رقم الهاتف</th>
            <th onclick="sortTable(5,'user_table')">صلاحية الوصول</th>
          </tr>
          <?php 

          foreach ($usr as $u) {
          ?> 
          <tr>
            <td><?=$u->getId()?></td>
            <td><?=$u->getName()?></td>
            <td><?=$u->getUserName()?></td>
            <?php echo '<td>' . AesCtr::decrypt($u->getPassword(),'absy',256) . '</td>' ?>
            <td><?=$u->getPhoneNumber()?></td>
            <?php
            switch ($u->getAccess()) {
              case 1:
                echo "<td>مسؤل مركز شرطة</td>";
                break;
                
              case 2:
                echo "<td>وكيل النيابة</td>";
                break;
              
              case 3:
                echo "<td>موظف</td>";
                break;

              case 4:
                echo "<td> مستخدم جوال</td>";

            }
            ?>
          </tr>
          <?php }  ?>
        </table>
      </div>
    </div>
  </div>

  <div class="rightcolumn">
    <div class="card">
      <form name="users" method="post">
        <input id="id_u" type="hidden" name="id">
        <div>الاسم</div>
        <input id="name_u" class="input-field" type="text" name="name" required>
        <div>اسم المستخدم</div>
        <input id="username_u" class="input-field" type="text" name="username" required>
        <div>كلمة المرور</div>
        <input id="password_u" class="input-field" type="text" name="password" required>
        <input id="en_u" type="hidden" name="password">

        <div>رقم الهاتف</div>
        <input id="phonenumber_u" onkeypress="return onlyNumberKey(event)" class="input-field" type="text" name="phonenumber" required>
        <div>صلاحية الوصول</div>
        <select id="state_select" class="input-field" name="access">
        <option value="" disabled selected hidden>الرجاء اختيار الصالحية</option>
        <option value="2">وكيل النيابة</option>
        <option value="3">موظف</option>
        <option value="4">مستخدم جوال</option>
        </select>

        <input class="btn" type="submit" value="اضافة" onclick="user('Add')">
        <input class="btn" type="submit" value="تعديل" onclick="user('Edit')">
        <input class="btn" type="submit" value="حذف" onclick="user('Delete')">
      </form>
    </div>
  </div>
</div>


<script src="../javascript/tableuserscript_ps.js"></script>
<script type="text/javascript">
  var password = document.getElementById("password_u");
  var en = document.getElementById("en_u");
  password.onkeyup = function(){
    en.value = AesCtr.encrypt(password.value,'absy', 256);
  };
</script>


<?php 
include("Footer.html");
?>