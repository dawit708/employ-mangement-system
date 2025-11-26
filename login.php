<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login mangement system</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
       crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
</head>
<body class="login body">
<form method ="POST" action="app/login.php" class="shadow p-4">
  <h3 class="display-4">LOGIN </h3>
<?php if (isset($_GET['error'])) {?>
<div class="alert alert-danger" role="alert">
<?php echo stripslashes($_GET['error']);?>
</div>
<?php } ?>

<?php if (isset($_GET['success'])) { ?>
<div class="alert alert-success" role="alert">
<?php echo stripslashes($_GET['success']);?>
</div>
<?php } 
//  $pass= 123;
//  $pass=password_hash($pass,PASSWORD_DEFAULT);
//  echo $pass;
?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User name</label>
    <input type="text" class="form-control" name="user_name">
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> 
</body>
</html>


















































<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login mangement system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQfIu8dAUyI18nU9gCI"
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="login body">
<form method="POST" action="app/login.php" class="shadow p-4">
  <h3 class="display-4">LOGIN </h3>

<?php if (isset($_GET['error'])) { ?>
<div class="alert alert-danger" role="alert">
<?php echo stripslashes($_GET['error']); ?>
</div>
<?php } ?>

<?php if (isset($_GET['success'])) { ?>
<div class="alert alert-success" role="alert">
<?php echo stripslashes($_GET['success']); ?>
</div>
<?php } ?>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User name</label>
    <input type="text" class="form-control" name="user_name">
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
</div>

<button type="submit" class="btn btn-primary">Login</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 

integrity="sha384-kQTaYj0lFJvQ17p0q8Ygq8UQq8wYG1ChB+FA9bUkO+ogzAm8h1Hn0XK0rAY+XKJk"
crossorigin="anonymous"></script>

</body>
</html> -->

































<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login mangement system</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
       crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
</head>
<body class="login body">
<form method ="POST" action="app/login.php" class="shadow p-4">
  <h3 class="display-4">LOGIN </h3>
<?php if (isset($_GET['error'])) {?>
<div class="alert alert-danger" role="alert">
<?php echo stripslashes($_GET['error']);?>
</div>
<?php } ?>

<?php if (isset($_GET['success'])) { ?>
<div class="alert alert-success" role="alert">
<?php echo stripslashes($_GET['success']);?>
</div>
<?php } ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User name</label>
    <input type="text" class="form-control" name="user_name">
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> 
</body>
</html> -->