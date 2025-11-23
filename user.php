<?php 
session_start(); 
if(isset($_SESSION['role']) && isset($_SESSION['id'])) { 
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
    Mange Users
</section>
</div>
</body>
</html>
<?php 
} else { 
    $em = "First login"; 
    header("location: login.php?error=$em"); 
    exit(); 
} 
?>