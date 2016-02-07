<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.png' />

    <title>Welcome</title>

    <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <script src="js/metro.js"></script>

    <style>
        html, body {
            height: 100%;
        }
        body {
        }
        .page-content {
            padding-top: 3.125rem;
            min-height: 100%;
            height: 100%;
        }
        .table .input-control.checkbox {
            line-height: 1;
            min-height: 0;
            height: auto;
        }

        @media screen and (max-width: 800px){
            #cell-sidebar {
                flex-basis: 52px;
            }
            #cell-content {
                flex-basis: calc(100% - 52px);
            }
        }
        .my_logo img
        {
          position: absolute;
          top:8px;
          left: 1.5%;
          width: 14%;
          z-index: 9999;
        }
        .in_out
        {
          margin-left: 33%;
          margin-right: 2%;
        }
        .add_new
        {
          position: absolute;
          bottom:0.7%;
          right: 0.7%;
        }
        .cycle-button{
          padding: 0 1rem;
          height: 4.125rem;
          background-color:rgb(0, 64, 80);
          border: 1px #d9d9d9 solid;
          color: #FFF;
          cursor: pointer;
          display: inline-block;
          outline: none;
          font-size: 2rem;
          line-height: 1;
          margin: .15625rem 0;
          position: relative;
          width: 4.125rem;
          min-width: 2.125rem;
          padding: 0 ;
          border-radius: 50%;
          text-align: center;
          text-decoration: none;
          vertical-align: middle;
        }
    </style>

    <script>
        function pushMessage(t){
            var mes = 'Info|Implement independently';
            $.Notify({
                caption: mes.split("|")[0],
                content: mes.split("|")[1],
                type: t
            });
        }

        $(function(){
            $('.sidebar').on('click', 'li', function(){
                if (!$(this).hasClass('active')) {
                    $('.sidebar li').removeClass('active');
                    $(this).addClass('active');
                }
            })
        })
    </script>
</head>
<body class="bg-steel">
  <div class="my_logo"><img src = "images/amityuni.png"></div>
    <div class="app-bar fixed-top darcula" data-role="appbar">
      <span class="app-bar-divider"></span>
        <ul class="app-bar-menu">
            <li><a href="welcome.php">Dashboard</a></li>
            <li>
                <a href="" class="dropdown-toggle">Inventory</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="Stock_Inventory.php?status=a">In/Stock</a></li>
                    <li class="divider"></li>
					<li><a href="Issue_Inventory.php">Out/Issue</a></li>
                    <li class="divider"></li>
					<li><a href="Return_Inventory.php">Return</a></li>
                    <li class="divider"></li>
                  </ul>
            </li>
			<li>
                <a href="" class="dropdown-toggle">Report</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="Stock_Report.php">Inventory</a></li>
                    <li class="divider"></li>
                    <li><a href="">Issue/OUT</a></li>
                    <li class="divider"></li> 
					 <li><a href="">Recieve</a></li>
                    <li class="divider"></li>
                </ul>
            </li>
            <li><a href="">System</a></li>
            <li>
                <a href="" class="dropdown-toggle">Help</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="">Report Issues</a></li>
                    <li><a href="">Community support</a></li>
                    <li class="divider"></li>
                    <li><a href="">About</a></li>
                </ul>
            </li>
        </ul>

        <div class="app-bar-element place-right">
            <span class="dropdown-toggle"><span></span><?php  echo $_SESSION['name']; ?></span>
            <div class="app-bar-drop-container padding10 place-right no-margin-top block-shadow fg-dark" data-role="dropdown" data-no-close="true" style="width: 220px">
                <h2 class="text-light">Quick settings</h2>
                <ul class="unstyled-list fg-dark">
                    <li><a href="" class="fg-white1 fg-hover-yellow">Profile</a></li>
                    <li><a href="" class="fg-white2 fg-hover-yellow">Security</a></li>
                    <li><a href="php/logout.php" class="fg-white3 fg-hover-yellow">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
