<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <input type="checkbox" id="checkbox">
    <header class="header">
        <h2 class="u-name">SIDE <b>BAR</b>
            <label for="checkbox">
                <i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
            </label>
        </h2>
        <i class="fa fa-bell" aria-hidden="true"></i>
    </header>

    <div class="body">
        <nav class="side-bar">
            <div class="user-p">
                <img src="img/user.png" alt="User">
                <h4>@Users</h4>
            </div>

            <?php
            $user = "admin";
            if($user == "employee"){
            ?>
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-dashboard" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                            <span>My Tasks</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-bell" aria-hidden="true"></i>
                            <span>Notifications</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            <?php } else { ?>
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-dashboard" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>Manage Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <span>Create Tasks</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                            <span>All Tasks</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-bell" aria-hidden="true"></i>
                            <span>Notifications</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            <?php } ?>
        </nav>

        <section class="section-1">
           
        </section>
    </div>
</body>
</html>







































<!-- <!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">SIDE <b>BAR</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="img/user.jpg">
				<h4>EMS </h4>
			</div>
			<ul>
				<li>
					<a href="#">
					
            <i class="fas fa-tachometer-alt" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#">
            <i class="fa fa-tasks"aria-hidden="true"></i>

						<span>My Tasks</span>
					</a>
				</li>
				<li>
					<a href="#">
				
              <i class="fa fa-users"aria-hidden="true"></i>
						<span>Profile</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-info-circle" aria-hidden="true"></i>
						<span>About</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-cog" aria-hidden="true"></i>
						<span>Setting</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">
			<h1>WELCOME</h1>
			<p>#CodingWithElias</p>
		</section>
	</div>

</body>
</html> -->