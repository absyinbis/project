<?php 
include("Admin_Header.html");
?>

<div class="row" id="1">
  <div class="leftcolumn">
    <div class="card">
      <div class="table-content">
        <table id="police_station_table" class="table">
          <tr>
            <th onclick="sortTable(0,'police_station_table')">رقم</th>
            <th onclick="sortTable(1,'police_station_table')">الاسم</th>
            <th onclick="sortTable(2,'police_station_table')">اسم المستخدم</th>
            <th onclick="sortTable(3,'police_station_table')">كلمى المرور</th>
          </tr>
          <?php 
          require_once  '../php/lib_db.php';
          $ps = getPoliceStations();
          foreach ($ps as $pss) {
          ?> 
          <tr>
            <td><?=$pss->getId()?></td>
            <td><?=$pss->getName()?></td>
            <td><?=$pss->getUserName()?></td>
            <td><?=$pss->getPassword()?></td>
          </tr>
          <?php }  ?>
        </table>
      </div>
    </div>
  </div>

  <div class="rightcolumn">
    <div class="card">
      <form name="police_station" method="post">
        <div style="color: red;"><?php if(isset($_SESSION["ERROR"])){ echo $_SESSION["ERROR"];
        $_SESSION["ERROR"]='';}?>
        </div>
        <input id="id_ps" type="hidden" name="id">
        <div>الاسم</div>
        <input id="name_ps" class="input-field" type="text" name="name">
        <div>اسم المستخدم</div>
        <input id="username_ps" class="input-field" type="text" name="username">
        <div>كلمة المرور</div>
        <input id="password_ps" class="input-field" type="text" name="password">
        <div>صلاحية الوصول</div>
        <select class="input-field" name="access">
        <option value="0">مسؤول</option>
        <option value="1">مركز شرطة</option>
        <option value="2">النيابة</option>
        </select>

        <input class="btn" type="submit" value="اضافة" onclick="policestation('Add')">
        <input class="btn" type="submit" value="تعديل" onclick="policestation('Edit')">
        <input class="btn" type="submit" value="حذف" onclick="policestation('Delete')">
      </form>
    </div>
  </div>
</div>


<script src="../javascript/tablepolicestationscript.js"></script>

<?php 
include("Footer.html");
?>