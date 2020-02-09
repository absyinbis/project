<?php 
session_start();
include("Admin_Header.html");
 ?>


<div class="row" id="2">
  <div class="leftcolumn">
    <div class="card">
      <div class="table-content">
        <table id="user_table" class="table">
          <tr>
            <th onclick="sortTable(0,'user_table')">id</th>
            <th onclick="sortTable(1,'user_table')">name</th>
            <th onclick="sortTable(2,'user_table')">username</th>
            <th onclick="sortTable(3,'user_table')">password</th>
            <th onclick="sortTable(4,'user_table')">phonenumber</th>
            <th onclick="sortTable(5,'user_table')">who</th>
          </tr>
          <?php 
          require_once  '../php/lib_db.php';
          $usr = getUsers();
          foreach ($usr as $u) {
          ?> 
          <tr>
            <td><?=$u->getId()?></td>
            <td><?=$u->getName()?></td>
            <td><?=$u->getUserName()?></td>
            <td><?=$u->getPassword()?></td>
            <td><?=$u->getPhoneNumber()?></td>
            <td><?=$u->getWho()?></td>
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
        <div>name</div>
        <input id="name_u" class="input-field" type="text" name="name" required>
        <div>username</div>
        <input id="username_u" class="input-field" type="text" name="username" required>
        <div>password</div>
        <input id="password_u" class="input-field" type="text" name="password" required>
        <div>phone number</div>
        <input id="phonenumber_u" class="input-field" type="text" name="phonenumber" required>

        <input class="btn" type="submit" value="Add" onclick="user('Add')">
        <input class="btn" type="submit" value="Edit" onclick="user('Edit')">
        <input class="btn" type="submit" value="Delete" onclick="user('Delete')">
      </form>
    </div>
  </div>
</div>


<script src="../javascript/tableuserscript.js"></script>

<?php 
include("Footer.html");
?>