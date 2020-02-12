<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Welcome to Bank Money Bin</title>

    <link href="/dashboard/stylesheets/style.css" rel="stylesheet" type="text/css" /><link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />


  </head>

  <body class="index">
    
    <h1>Welcome to Bank Money Bin</h1>
    <form action="send_info.php" method="post">
    <div id="first">Firstname:</div> <div id="second"><input type="text" name="firstname" required></div> <div id="third">Lastname:</div> <div id="forth"><input type="text" name="lastname" required></div></br>
    <div id="first">Loan amount:</div> <div id="second"><input type="number" name="loan_amount" min=100 max=10000000 required></div></br>
    <div id="first">Interest rate:</div> <div id="second"><input type="number" name="interest" step=0.01 min=0.01 max=20 required></div></br>
    <div id="first">Years:</div> <div id="second"><input type="number" name="year" min=1 max=20 required></div></br>
    <div id="first"><input type="submit"></div>
    <footer>
      
    </footer>

    <!-- JS Libraries -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/dashboard/javascripts/all.js" type="text/javascript"></script>
  </body>
</html>
