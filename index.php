<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body class="home" >
  <div class="topnav" id="myTopnav">
    <a class="active" href="index.php " ><i class="fa fa-fw fa-home"></i>  Home</a>
    <a href="customers.php"><i class="far fa-address-card"></i>	 Customer Details</a>
    <a href="contact.php"><i class="fa fa-fw fa-envelope"></i>  Contact</a>
    <a href="about.php"><i class="far fa-info-circle"></i>  About</a>
    <a href="transactionhis.php"><i class="fas fa-money-bill-alt" ></i>  Transaction History</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i></a>
  </div>

<section class="container">
  <div class="content one"> WELCOME TO </div>
  <div class="content">TSF BANK</div>
</section>

<div id="space">

</div>



  <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
<div class="footer">
  <p><i class="far fa-copyright"></i>&nbsp; Designed By : Aaryan Raina &nbsp;<a href="https://www.linkedin.com/in/aaryan-raina-5186061b3/?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base%3BEZkwFGBoTw6zuEsNjl5%2FZg%3D%3D" style="color:white !important;" ><i class="fab fa-linkedin"></i></a>&nbsp;-&nbsp;Intern at The Sparks Foundation&nbsp;-&nbsp;June, 2021</p>
</div>
</html>
    