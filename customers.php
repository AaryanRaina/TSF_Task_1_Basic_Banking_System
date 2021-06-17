<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body class="rest">
  <div class="topnav" id="myTopnav">
    <a href="index.php " ><i class="fa fa-fw fa-home"></i>  Home</a>
    <a class="active" href="customers.php"><i class="far fa-address-card"></i>	 Customer Details</a>
    <a href="contact.php"><i class="fa fa-fw fa-envelope"></i>  Contact</a>
    <a href="about.php"><i class="far fa-info-circle"></i>  About</a>
    <a href="transactionhis.php"><i class="fas fa-money-bill-alt" ></i>  Transaction History</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i></a>
  </div>
<?php
    include 'config.php';
    $sql = "SELECT * FROM `details`    ";
    $result = mysqli_query($link,$sql);
?>


<div class="container">
      <h2 style="text-align:center;font-size:55px">TRANSFER MONEY</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table>
                        
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2"> Account Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        
                    
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td class="transact"><a href="viewdetails.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn button1">Transfer Money</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         
        
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
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