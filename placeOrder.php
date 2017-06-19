<!DOCTYPE html>
<html lang="en">
<head>
    <title>Place Order</title>
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
<body data-spy="scroll" data-target="#my-navbar2">
<!--Navbar starts-->
<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar2">
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
  <a href="index.php#price-list"><button type="button" class="btn btn-info" style="padding-left:20px; padding-right:20px;background-color:#66b3ff">View Products</button></a>
  <a href="products.php"><button type="button" class="btn btn-success btn-success-outline" style="padding-left:20px; padding-right:20px;background-color:#70db70">Exquisite Products</button></a>
</div>


</div>






  <div class="container">
  <section>
    <div class="page-header">
          <h2>Place Order Form <span class="glyphicon glyphicon-envelope"></span></h2>
        </div><!-- End Page Header -->

        <div class="row">
        <div class="col-md-12">
        <?php
// define variables and set to empty values
$nameerror = $emailerror =  $messageerror= $messagetotal= $mobileerror = $header = "";
$name = $email =  $message= $website= $mobile = $mymessage = $mymail = "";

if(isset($_POST['name1'],$_POST['email1'],$_POST['message1'],$_POST['mobile1'])){
  if(empty($_POST['name1']))
  {
    $nameerror="Please enter a name";
  }else{
    $name=htmlentities($_POST['name1']);
  }
  if(empty($_POST['email1']))
  {
    $emailerror="Please enter an email address";
  }
  else if (strlen($_POST['email1'])>25) {
    $emailerror="Your email address is too long. Please enter a correct email address.";
  }
  else if(filter_var($_POST['email1'],FILTER_VALIDATE_EMAIL)==false)
  {
    $emailerror="Please provide a valid email address";
  }
  else{
    $email="<".htmlentities($_POST['email1']).">";
  }
  if(empty($_POST['message1']))
  {
    $messageerror="Please enter a message";
  }else{
    $message=htmlentities($_POST['message1']);
  }
  if(empty($_POST['mobile1']))
  {
    $mobileerror="Please enter a Mobile no.";
  }
  else if (!preg_match("/^[0-9]*$/",$_POST['mobile1'])) {
      $mobileerror = "Please enter only digits"; 
    }
  else if (strlen($_POST['mobile1'])>15)
  {
    $mobileerror="Please enter a valid Mobile no.";
  }
  else if(strlen($_POST['mobile1'])<10)
{
  $mobileerror="Please enter a valid Mobile No.";
}
  else{
    $mobile=htmlentities($_POST['mobile1']);
  }
  $messagetotal="Name: $name"."\n"."E-mail Address: $email"."\n"."Mobile No. : $mobile"."\n"."Message: $message";
$mymail="rajenmehta5@gmail.com";
$mymessage="Thank you for your message. We have successfully stored your data and we will revert back to you soon.";
$headers="From: $email";
$header="From: $mymail";

if(empty($nameerror) && empty($emailerror) && empty($messageerror) && empty($mobileerror))
  {
    
    mail($mymail, 'Website based message entry', $messagetotal, $headers);
    mail($email, 'Mehta Trading Company', $mymessage, $header);

  
  }
}
?>
            <form name="form1" method="POST" action="" class="form-horizontal" id="register-form">
              <div class="form-group">
                <label for="user-name" class="col-md-2 control-label">Name<label style="color:red">*</label></label>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="name1" id="user-name" placeholder="Enter you name">
                  <span class="error" style="color:red"><?php echo $nameerror;?></span>
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-email" class="col-md-2 control-label">E-mail<label style="color:red">*</label></label>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="email1" id="user-email" placeholder="Enter you Email Address">
                <span class="error" style="color:red"><?php echo $emailerror;?></span>
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="mobile" class="col-md-2 control-label">Mobile No.<label style="color:red">*</label></label>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="mobile1" id="mobile" placeholder="Enter you Mobile No.">
                <span class="error" style="color:red"><?php echo $mobileerror;?></span>
                </div>
              </div><!-- End form group -->


                <div class="form-group">
                <label for="user-url" class="col-md-2 control-label">Your Website</label>
                <div class="col-md-10">
                  <input type="text" name="website1" class="form-control" id="website1" placeholder="If you have Any.">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-message" class="col-md-2 control-label">Any Message<label style="color:red">*</label></label>
                <div class="col-md-10">
                  <textarea name="message1" id="message1" class="form-control" 
                  cols="20" rows="10" placeholder="Enter your Message"></textarea>
                  <span class="error" style="color:red"><?php echo $messageerror;?></span>
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <div class="col-md-4 col-md-offset-2">
                  <input  type="submit" name="submit" value="Submit" class="btn btn-primary"></button>
                </div>
              </div>
            </form>
          </div>
    </div>
  </section>
</div>
       



<!--CONTACT US ENDS-->

<hr>


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
<script type="text/javascript">
  $(document).ready(function() {
    var validator = $("#register-form").bootstrapValidator({
      fields:{
        name1:{
          message:"Name is required",
          validators:{
            notEmpty:{
              message:"Please provide a name"
            }
          }
        }
      }
    });

  });
</script>














        </body>
        </html>