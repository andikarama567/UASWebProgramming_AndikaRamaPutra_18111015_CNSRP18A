<html>
    <head>
        <link rel="stylesheet" href="../bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../fontawesome-free-5.15.1-web/css/all.min.css">
        <link rel="stylesheet" href="loginCss.css">
    <title>Sign In</title>
</head>
<body>
    <div class="container">
        <h4 class="text-center">Sign In</h4>
        <hr>

        <form action="logincontrol.php" method="POST" name="myf">
            <div class="form-group">
                <label>Username</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user"></i>
            </div>
            </div>    
                <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                </div>  

            <div class="form-group">
                <label>Password</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-unlock-alt"></i>
            </div>
            </div>
                <input type="password" name="pwd" class="form-control" placeholder="Password" required>
            </div>
            </div>

            <button type="submit" class="btn btn-primary">Sign In</button>
            <button type="reset" class="btn btn-danger">Reset</button>

            <div class="button1">
                <a href="#">Forgot Password ?</a>
                <a href="../Registration/Registration.php">Sign Up</a>
            </div>

        </form>
    </div>

    < <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy;Copyright By :</p>
        <p class="mb-1">18111015_Andika Rama Putra_CNSRP18A.</p>

    <?php if(isset($_GET['pesan'])) {  ?>
	<label style="color:white;"><?php echo $_GET['pesan']; ?></label>
	<?php } ?>    
</body>

<script type="text/javascript">
function val(){
    var username = document.forms["myf"]["username"].value;
    var pwd = document.forms["myf"]["pwd"].value;
    if(username == username.value && pwd.value ){
        return true;
    }else if(username != username.value){
        alert("Your ID is not existed");
        return false;
    }else if(pwd != pwd.value){
        alert("Your password is not right");
        return false;
    }else{
        alert("Field cannot be blank");
        return false;
    }
}   
</script>
</html>