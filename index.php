<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.png' />

    <title>Amity University Rajasthan : Department of IT</title>

    <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/metro.js"></script>
    <script src="js/docs.js"></script>
    <script src="js/prettify/run_prettify.js"></script>

    <style>
        .login-form {
            width: 25rem;
            height: 18.75rem;
            position: fixed;
            top: 35%;
            margin-top: -9.375rem;
            left: 50%;
            margin-left: -12.5rem;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
        .login-form img
        {
          height: 50%;
          margin-left: 35%;
              }
        .login-form h1
        {
          color: #FFF;
          margin-left: 10%;
        }
      .input-control input
      {
        width: 80%;
        margin-left: 10%;
      }
      .signature img
      {
        width: 30%;
      }
      .signature
      {
        bottom:0.5%;
        left: 1%;
        position: absolute;
        opacity:5;
		z-index:999;
      }
	  .Copyright
      {
        bottom:1%;
        right: 1.5%;
        position: absolute;
        opacity:0.9;
		z-index:999;
      }
      .back
      {
        bottom:0.5%;
        left: 1%;
        position: absolute;
		height:41.5px;
		width:41.5px;
		border-radius: 50%;
        background: #FFF;
		opacity:0.8;
		z-index: 989;
      }
    </style>

    <script>

        $(function(){
            var form = $(".login-form");

            form.css({
                opacity: 1,
                "-webkit-transform": "scale(1)",
                "transform": "scale(1)",
                "-webkit-transition": ".5s",
                "transition": ".5s"
            });
        });
    </script>
</head>
<body class="bg-darkTeal" >
    <div class="login-form padding20">
      <img src="images/amity.png">
         <h1 class="text-light">AKC Data Systems</h1>
          <form action="php/login.php" method="post">
		  <div class="grid">
			<div class="margin_left10">
                <div class="row">
					<div class="input-control modern text iconic" data-role="input">
                            <input type="text" name="username" id="username" required="required">
                            <span class="label">You login</span>
                            <span class="informer">Please enter you login or email</span>
                            <span class="placeholder">Input login</span>
                            <span class="icon mif-user"></span>
                        </div>
                    </div>
                        <div class="input-control modern password iconic " data-role="input" style="margin-top:-4%;">
                            <input type="password" name="password" id="password" required="required">
                            <span class="label">You password</span>
                            <span class="informer">Please enter you password</span>
                            <span class="placeholder">Input password</span>
                            <span class="icon mif-lock"></span>
                            <button class="button helper-button reveal"><span class="mif-looks"></span></button>
                        </div> 
			  </div>
               <div  class="input-control sub full-size" data-role="input">
                <input type="submit" name="submit" value="Move In">
				</div>
			</div>
		</div>  
    </form>
   <div class="signature ani-demo-cube ani-float ani-fast">      
      <img src="images/imorbis.png">
   </div>
   <div class="back ani-demo-cube ani-float ani-fast bd-yellow"></div>
   <div class="Copyright"><a href="">&nbsp;&nbsp;&nbsp;@SACHIT KUMAR<br>ALL RIGHTS RESERVED</a></div> 
  </body>
</html>
