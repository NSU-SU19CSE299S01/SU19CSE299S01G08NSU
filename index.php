<!DOCTYPE html>



<html>
    <head>
        <meta charset="UTF-8">
 
        
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="icon" href="images/homepage/favicon.ico" type="image/x-icon">
<title>Online percel Service</title>
	<meta name="author"	content="Audenberg Technologies (www.audenberg.com)" />

  <script src="js/bootstrap.min.js"></script>
<link href="css/Animate.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
    </head>
    <body>
        <?php
     
        include 'navBar.php';
        include 'signinModals.php';
        ?>
       <div class="" id="myEmployerModal" tabindex="-1" role="dialog" aria-labelledby="myEmployerModalLabel" style="background-image:url('images/bg.png'); background-size: cover; background-repeat: no-repeat;  height: 100vh;">
    <div class="modal-dialog" role="document" >
    <div class="modal-content" style="  background-color:rgba(225,225,225,0.5) ; box-shadow: 0px 0px 20px #1e1e1e; padding: 12%;">
      <div class="modal-header">
          <button id="empSignInCloseBtn" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> </span></button>
        <h4 class="modal-title" id="myEmployerModalLabel">SignIn</h4>
      </div>
      <div class="modal-body"> 
					
        <div id="cd-login"> <!-- log in form -->
            <form class="cd-form" method="post" action="signin.php">
					
            
                <p class="fieldset">
						<label class="image-replace cd-email" for="eemail">E-mail</label>
                                                <input class="full-width has-padding has-border" id="email" name="email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="epass">Password</label>
                                                <input class="full-width has-padding has-border" id="password" name="password" type="password"  placeholder="Password">
						<a href="#0" class="hide-password">Show</a>
						<div id="loginresult" style="display:none;">Error message here!</div>
					</p>

					
                                        <input type="hidden" id="currentPage" name="currentPage" value="<?php echo $_SERVER['PHP_SELF']; ?>"
					<p class="fieldset">
                                            <input id="loginsubmit" class="full-width" type="submit" name="loginsubmit" id="login" value="Login">
					</p>
				</form>
				
            <p class="cd-form-bottom-message">
                <button id="regNowBtn" class="btn btn-default"  data-toggle="modal" data-target="#empsignup"  style="color: brown;" >
                                Register Now</button></p>
<button id="regEmpModalBtn" style="display:none;"  data-toggle="modal" data-target="#empsignup" >
                                </button>                                
				
			</div>
      </div>
      <div class="modal-footer">
     
  
  </div>
    
</div> 
        
        
    </body>
</html>
