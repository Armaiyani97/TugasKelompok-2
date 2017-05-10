<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Register User | Restoran</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Roboto:400);
body {

background-size:100%;
   background-image:url("lwall.jpg");
   background-position:right top;
   background-attachment:fixed;
}

.container {
    padding: 180px;
    position: fixed;
}

.form-login {
    background-color: #EDEDED;
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    box-shadow:0 1px 0 #cfcfcf;
}

h4 { 
 border:0 solid #fff; 
 border-bottom-width:1px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}

.wrapper {
    text-align: center;
}

    </style>
    <!-- <script src="assets/jquery-1.11.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script> -->
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-offset-7 col-md-7">
        <form action="auth.php" method="post">
            <div class="form-login">
            <h3>Selamat Datang...</h3>
            <h4>Gratis, sampai kapan pun.</h4>
            <input type="hidden" name="auth" value="register">
            <input type="text" class="form-control input-sm chat-input" placeholder="name" name="nama" />
             <br/>
            <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="username" name="username" />
            </br>
            <input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="password" />
            <br/>
            <input type="password" id="userPassword" name="konfirmasi_password" class="form-control input-sm chat-input" placeholder="konfirmasi password" />

            </br>
            <div class="wrapper">
            <span class="group-btn">     
                <input  type="submit" class="btn btn-primary btn-md" value="Daftar">
            </span>
            <br/><br/>
            <a href="login.php" style="text-decoration:none"><b>kamu sudah mempunyai akun?</b></a>
            </div>
            </div>
        </form>
        
        </div>
    </div>
</div>
<script type="text/javascript">

</script>
</body>
</html>
