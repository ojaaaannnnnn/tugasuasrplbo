<?php
include('cekstudent.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Selamat Datang</title>

		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin DashBoard</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">

                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <a class="navbar-brand" href="#">
				<?php
				$nama = $_SESSION['username'];
                echo "<img style='height: 30px; margin-top: -5px;' src='assets/img/icon/$nama.png' class='img-circle'>";
				?> 
				<div class="pull-left">
				<p style="margin: -25px 40px 10px;">Welcome <i><?php echo $_SESSION['username']; ?></i></p>
				</div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
				<li></i></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
			<ul class="nav navbar-nav navbar-right">
				<li></i></li>
                <li><a href="tentang.php">About</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
				<li></i></li>
                <li><a href="halstudent.php">Home</a></li>
            </ul>
        </div>
    </div>
</nav>
</div>			  
</div>	

<div class="card mb-4" style="background: 	#fff;  ">
          <div class="card-body">
			<div class="bs-example">
    <div class="accordion" id="accordionExample">
        <div class="card" style="background: 	#fff;  ">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  Data 								
                     </h2><p>======================================================================</p>
					<ul><p>Nama                 : Muhammad Fauzan</p>
					    <p>Tempat/Tanggal Lahir : Pekanbaru, 17 Januari 2001</p>
					    <p>Agama 				: Islam</p>
					    <p>Nim 				    : 11950115127</p>
					    <p>Alamat 				: Jl. Harapan Jaya, Kel. Lembah Damai, Kec. Rumbai Pesisir, Pekanbaru Riau</p>
					    <p>No. Hp 				: 089567123452</p>
					    <p>Alamat Email			: fauzanfaturas@gmail.com</p>
					</ul>
                    </h2><p>======================================================================</p>
			</div>
        </div>
		</div>
		</div>
        </div>
          </div>
		 <div class="card-footer text-muted">
            Posted on December 13, 2021 by
            <a href="#">FestivalBandPKU</a>
          </div>
        </div>
</body>
</html>