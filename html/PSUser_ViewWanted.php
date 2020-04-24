<?php 
session_start();
include("PSUser_Header.html");
?>

<div class="row">
  <div class="leftcolumn" style="width: 100%; float: right;">
    <div class="card">

      <form action="PSUser_ViewWanted.php" method="post">
        <div class="wrapper">
          <input type="text" class="input" name="search" placeholder="What are you looking for?">
          <div class="searchbtn"><i class="fas">بحث</i></div>
        </div>
      </form>


      <div class="table-content">
        <table id="user_table" class="table">
          <tr>
            <th onclick="sortTable(0,'user_table')">اسم المطلوب</th>
            <th onclick="sortTable(1,'user_table')">الرقم الوطني</th>
            <th onclick="sortTable(2,'user_table')">التاريخ</th>
          </tr>
          <?php 
          require_once  '../php/lib_db.php';
          $account = unserialize($_SESSION["ACCOUNT"]);

          if(isset($_POST["search"]))
          {
            $i = $_POST["search"];
            $sql = "select * from wanted
            where ps_id = '". $account->getWho() ."'
            and state = 1
            and name like '%".$i."%'
            or date like '%".$i."%'
            or national_number like '%".$i."%'";
            $wanted = Search($sql,'wanted');
          }
          else

          $wanted = getWanted();


          foreach ($wanted as $w) {
          ?> 
          <tr>
            <td><?=$w->getName()?></td>
            <td><?=$w->getNationalNumber()?></td>
            <td><?=$w->getDate()?></td>
            <td>
            <form action="PSUser_ViewDetailsWanted.php" method="post">
              <input type="hidden" name="id" value="<?=$w->getId()?>">
              <input type="submit" value="عرض المحظر">
            </form>
          </td>
          </tr>
          <?php }  ?>
        </table>
      </div>
    </div>
  </div>
</div>

<?php 
include("Footer.html");
?>