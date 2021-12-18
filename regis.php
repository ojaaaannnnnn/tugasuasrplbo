<?php
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



<div class="container" style="margin-top:60px">
<h2>Form Pendaftaran Anggota</h2>
    <form action="pendaftaran.php" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukan Username" />
        </div>
	<div class="form-group">
            <label>password</label>
            <input type="text" name="password" class="form-control" placeholder="Masukan Password" />
        </div>
    <div class="form-group">
         <label>Level akses</label>
	     <input type=select name="level" class="form-control" required>
		 <option value="3">User</option>
	

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
</div>			  
</div>	
</body>
</html>