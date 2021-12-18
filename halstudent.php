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
        <style>
	body{
		background-image: url("g1.jpg");
        background-size: cover;
        background-attachment: fixed;
        width: 100%;
        height: 100%; 
    }
	</style>
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
<div class="container" style="margin-top:60px">	


              </div>
               <!-- Content Row-->
        
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Festival land</h2>
                            <p class="card-text">Festival ini akan diadakan pada tanggal 15 Maret 2021
                            </p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="festival1.php">More Info</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Jackcloth Festival </h2>
                            <p class="card-text">Festival ini diadakan untuk memeringati anniversary Jackcloth yang ke 17th. Untuk itu kami
                                mengadakan festival musik yang akan diadakan pada tanggal 11 juni 2022 nantinya.
                            </p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="festival2.php">More Info</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Festival Gigs</h2>
                            <p class="card-text">Ayoooo band-band lokal!!! Kreasikan bakatmu di Gigs 2021, satukan tujuan bersama kita bisa!!!!</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="festival3.php">More Info</a></div>
                    </div>
                </div>
            </div>
        </div>
        
</div>			  
</div>	
</body>
</html>