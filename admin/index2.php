<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home2.php');
  	}
?>
<?php include 'includes/header2.php'; 
      
?>
<head>
  <style type="text/css">
    .login-box{
      position: absolute;
      left: 47%;
      top:19%;
    }
    .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}
.imgcontainer{
  position: absolute;
  left:27%;
  top:30%;

}
.avatar{
  width:180px;
  
}
.login-logo{
  position: absolute;
  top:3%;
}
b{
  position: absolute;
  top:20%;
  left: 34%;
  font-size: 40px;
}

  </style>

</head>

<body class="hold-transition login-page">
<b><u>NITC Library System</u></b>
<div class="imgcontainer">
    <div class="login-logo">
   
    </div>
  
    <img src="../images/nitclogo1.png" alt="Avatar" class="avatar">
          
  </div>
    
<div class="login-box">
  
  	
  	<div class="login-box-body">
    	<p class="login-box-msg">Librarian Sign In</p>

    	<form action="login2.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="input Username" required autofocus>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="input Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>