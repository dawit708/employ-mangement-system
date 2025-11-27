<?php 
session_start(); 
if(isset($_SESSION['role']) && isset($_SESSION['id'])) {
  include "DB_connection.php";
    include "model/user.php";
$users_data = get_all_users($conn); 
// echo "<pre>";
// print_r($users_data); 
// echo "</pre>";
?>
<!DOCTYPE html>
<html>
<head>
<title>Mange Users</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<input type="checkbox" id="checkbox">
 <?php include "inc/header.php" ?>
<div class="body">
 <?php include "inc/nav.php" ?>
<section class="section-1">
  <h4 class ="title">Mange Users <a href="add-user.php">Add user</a></h4>
  <?php if ($users_data!=0) {
  ?>
    <table class="main-table">
      <tr>
        <th>#</th>
        <th>Full Name</th>
         <th>username</th>
          <th>role</th>
           <th>Action</th>
      </tr>
      <?php  $i=0; foreach ($users_data as $users_data ) {?>
    
      <tr>
        <th><?=++$i?></th>
        <th><? $users_data ['Full_name']?></th>
        <th><? $users_data ['username']?></th>
        <th><? $users_data ['role']?></th>
        <td> 
          <a href="edit-users.php?id=<?=$users_data['id']?>" class="edit-btn">Edit</a>
           <a href="delete-users.php?id=<?=$users_data['id']?>" class="delete-btn">Delete</a>
      </td>
      </tr>  <?php } ?>
    </table>
    <?php } else{ ?>
      <h3>Empty</h3>
      <?php

    } ?>
</section>
</div>
<script type="text/javascript">
    var active = document.querySelector("#navList li:nth-child(2)");
    active.classList.add("active"); 
</script>
</body>
</html>
<?php 
} else { 
    $em = "First login"; 
    header("location: login.php?error=$em"); 
    exit(); 
} 
?>