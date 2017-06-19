<!DOCTYPE html>
<html lang="en">
<head>
    <title>MTC Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styler.css">
    <meta name="theme-color" content="#0073e6">
    <link rel="stylesheet" type="text/css" href="animate.css">
    <script src="wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
</head>
<style type="text/css">
	body{padding-top: 40px}
  .error{color:red;}
</style>
<body data-spy="scroll" data-target="#my-navbar3">
<!--Navbar starts-->
<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar3">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle wow bounceInDown" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">MTC</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      
        <li ><a href="index.php#feedback">Feedback</a></li>
        <li ><a href="index.php#price-list">Price Details</a></li>
        
        
        <li ><a href="index.php#faq">Faq</a></li>
        <li ><a href="index.php#about">About Us</a></li>
        <li ><a href="index.php#contact">Contact Us</a></li>
        
        </ul>
        </div>
        </div>
        </nav>
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!--Navbar ends-->













        <div class="jumbotron text-center" style="background-color:#0073e6">
      <h1 >MEHTA TRADING COMPANY </h1><span><img src="truck.png" style="height:30px ;width:30px" /></span><h6><strong>Automobile Spare Parts Distribution</strong></h6></span>
  <p>We offer the best products at the lowest rates</p>




<div class="btn-group btn-lg" role="group" aria-label="">
  <a href="index.php#price-list"><button type="button" class="btn btn-info" style="padding-left:30px; padding-right:30px;background-color:#66b3ff">View Products</button></a>
  <a href="placeOrder.php"><button type="button" class="btn btn-danger" style="padding-left:30px; padding-right:30px; background-color:#ff4d4d">Place Order</button></a>
</div>


</div>









  <div class="container">
  <section>
    <div class="page-header">
          <h2>Some of our Products <span class="glyphicon glyphicon-shopping-cart"></span></h2>
        </div><!-- End Page Header -->
        </section>
        </div>










<div class="container" style="max-width:700px; max-height:400px">
<section>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="mtc.jpg" style="height:400px; width:700px; " alt="Mehta Trading Company">
      <div class="carousel-caption">
        Mehta Trading Company Office
      </div>
    </div>
    <div class="item">
      <img src="part1.jpg"  style="height:400px; width:700px; " alt="sparepart-1">
      <div class="carousel-caption">
        Bell Crank
      </div>
    </div>
    <div class="item">
      <img src="part3.jpg"  style="height:400px; width:700px; " alt="sparepart-2">
      <div class="carousel-caption">
        King Pin Set
      </div>
    </div>
    <div class="item">
      <img src="part4.jpg"  style="height:400px; width:700px; " alt="sparepart-3">
      <div class="carousel-caption">
        SRMT Product Range
      </div>
    </div>
    <div class="item">
      <img src="part5.jpg"  style="height:400px; width:700px; " alt="sparepart-4">
      <div class="carousel-caption">
        Yoke Assembly
      </div>
    </div>
    <div class="item">
      <img src="part6.jpg"  style="height:400px; width:700px; " alt="sparepart-5">
      <div class="carousel-caption">
        SBP Product Range
      </div>
    </div>
    <div class="item">
      <img src="part7.jpg"  style="height:400px; width:700px; " alt="sparepart-6">
      <div class="carousel-caption">
        Brake Drum
      </div>
    </div>

        
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
</div>

<div class="container" style="min-height:30px"></div>






<div class="container-fluid">
  

<section>
  <div class="well">
    <div class="container text-center">
      <h3>Please subscribe for great deals</h3>
      <p>Enter your name and email address</p>
      <?php
// define variables and set to empty values
$nameerror = $emailerror =  $messageerror= $messagetotal= $mobileerror = $header = $mymail = $mymessage = "";
$name = $email =  $message= $website= $mobile = "";

if(isset($_POST['name2'],$_POST['email2'])){
  if(empty($_POST['name2']))
  {
    $nameerror="Please enter a name";
  }else{
    $name=htmlentities($_POST['name2']);
  }
  if(empty($_POST['email2']))
  {
    $emailerror="Please enter an email address";
  }
  else if (strlen($_POST['email2'])>25) {
    $emailerror="Your email address is too long. Please enter a correct email address.";
  }
  else if(filter_var($_POST['email2'],FILTER_VALIDATE_EMAIL)==false)
  {
    $emailerror="Please provide a valid email address";
  }
  else{
    $email="<".htmlentities($_POST['email2']).">";
  }
  if(empty($_POST['mobile2']))
  {
    $mobileerror="Please enter a Mobile no.";
  }
  else if (!preg_match("/^[0-9]*$/",$_POST['mobile2'])) {
      $mobileerror = "Please enter only digits"; 
    }
  else if (strlen($_POST['mobile2'])>15)
  {
    $mobileerror="Please enter a valid Mobile no.";
  }
  else if(strlen($_POST['mobile2'])<10)
{
  $mobileerror="Please enter a valid Mobile No.";
}  
  else{
    $mobile=htmlentities($_POST['mobile2']);
  }
  $messagetotal="Name: $name"."\n"."Mobile No. : $mobile"."\n"."E-mail Address: $email";
  $mymail="rajenmehta5@gmail.com";
  $mymessage="Thank you for your subscribing. We have successfully stored your data and we will revert back to you soon.";
  $headers="From: $email";
  $header="From: $mymail";
  $headers="From: $email";
if(empty($nameerror) && empty($emailerror) && empty($mobileerror))
  {
    
    mail($mymail, 'Website based (Subscribe) entry', $messagetotal, $headers);
    mail($email, 'Mehta Trading Company', $mymessage, $header);
  
  }
}
?>
      <form name="subscribe1" method="POST" action="" class="form-inline">
        <div class="form-group">
          <label for="subscription" >Name<label style="color:red">*</label></label>
          <input type="text" name="name2" class="form-control" id="name" placeholder="Enter your name">
          <span class="error" style="color:red"><?php echo $nameerror;?></span>
        </div>
        <div class="form-group">
          <label for="email">E-mail<label style="color:red">*</label></label>
          <input type="text" name="email2" class="form-control" id="email" placeholder="Enter your email">
          <span class="error" style="color:red"><?php echo $emailerror;?></span>
        </div>
         <div class="form-group">
          <label for="mobile">Mobile No.<label style="color:red">*</label></label>
          <input type="text" name="mobile2" class="form-control" id="mobile2" placeholder="Enter your Mobile no.">
          <span class="error" style="color:red"><?php echo $mobileerror;?></span>
        </div>
     
         <div class="form">
           <input name="subscribe" type="submit" value="submit" class="btn btn-primary"/>
         </div>
        
      </form>
    </div>
  </div>
</section>

</div>


<footer>
<div class="container-fluid" style="background-color:#808080">
<div class="row">
<div class="col-md-4">
  
</div>
<div class="col-md-4 text-center">
    <h5 style="color:white">Copyright &copy; <?php echo date("Y"); ?> Mehta Trading Company | All rights reserved</h5>
</div>
<div class="col-md-2">
</div>
<div class="col-md-2 col-md-offset-2 text-center">
    <h6 style="padding-left:55px ;padding-top:-20px">By: Tirth Rajen Mehta</h6>
</div>
        
 
   </div>
   </div>
</footer>


<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="jquery.min.js"></script>
<script src="js/bootstrap.js"></script>







</body>
</html>