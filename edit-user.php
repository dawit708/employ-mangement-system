<?php 
session_start(); 
if(isset($_SESSION['role']) && isset($_SESSION['id'])) { 
     include "DB_connection.php";
     include "app/model/User.php";

     if(!isset($_GET['id'])){
        header("location: user.php"); 
       exit(); 
     }
     $id= $_GET['id'];
    $user = get_user_by_id($conn,$id);
     if($user==0){
        header("location: user.php"); 
       exit(); 
     }
?>
<!DOCTYPE html>
<html>
<head>
<title> Edit User</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<input type="checkbox" id="checkbox">
<?php include "inc/header.php" ?>
<div class="body">
<?php include "inc/nav.php" ?>
<section class="section-1">
   <h4 class="title">Edit Users <a href="user.php">Users</a></h4>
   <form class="form-1" method="POST" action="app/Update-user.php">
    

   <?php if (isset($_GET['error'])) {?>
<div class="danger" role="alert">
<?php echo stripslashes($_GET['error']);?>
</div>
<?php } ?>

<?php if (isset($_GET['success'])) { ?>
<div class="success" role="alert">
<?php echo stripslashes($_GET['success']);?>
</div>
<?php } ?>
    <div class="input-holder">
        <label >Full Name</label>
        <input type="text" name="full_name" class="input-1" placeholder="Full Name" value="<?= $user['full_name']?>"> <br>
    </div>
    <div class="input-holder">
        <label > username </label>
        <input type="text" name="user_name" value="<?= $user['username']?>" class="input-1" placeholder=" username "> <br>
    </div>
    <div class="input-holder">
        <label > Password </label>
        <input type=" password " name="password" class="input-1" placeholder=" password " value="******" > <br>
        <input type="text" name="id" value="<?= $user['id']?>" hidden>
    </div>
    <button class="edit-btn">Update</button>
   </form>
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