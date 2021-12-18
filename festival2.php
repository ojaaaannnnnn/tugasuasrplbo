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
        background-repeat: no-repeat; 
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
<h2>Form Pendaftaran Anggota</h2>
    <form action="pendaftaran.php" method="post">
        <div class="form-group">
            <label>Nama Band</label>
            <input type="text" name="nama_band" class="form-control" placeholder="Masukan Nama Band" />
        </div>
	<div class="form-group">
            <label>Jumlah Personil</label>
            <input type="text" name="jumlah_personil" class="form-control" placeholder="Masukan jumlah" />
        </div>
	<div class="form-group">
	     <label>No Hp</label>
	     <input type=number name="no_hp" class="form-control" rows="5"placeholder="Masukan Nomor" />
	</div> 
	<div class="form-group">
            <label>Lagu</label>
            <input type="text" name="lagu" class="form-control" placeholder="Masukan Lagu" />
        </div>
	

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
</div>			  
</div>	
</body>
</html>