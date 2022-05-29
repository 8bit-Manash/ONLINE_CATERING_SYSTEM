<?php
session_start();
error_reporting(0);


$servername ="localhost";
$username = "root";
$password = "";
$dbname = "catering";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering</title>
</head>
<link rel="stylesheet" href="css/catering.css"/>

<body>
    <header class="header">
        <!-- left box for logo -->
        <div class="left">
          <img
            src="img/img1.png"
            alt="error"
          />
          <p class="df" ><a href="https://www.zomato.com/" style="color: white"> NIRVANA_CUISINES</a></p>
        </div>
        <!-- mid box for navigation -->
        <div class="mid">
          <ul class="navbar">
            <li>
              <a href="#"><b>Home</b></a>
            </li>
            <li>
              <a href="#"><b>Menu</b></a>
            </li>
            <li>
              <a href="#"><b>Catering Bytes</b></a>
            </li>
            <li>
                <a href="#"><b>Features</b></a>
            </li>
            <li>
              <a href="#"><b>Contact Us</b></a>
            </li>
            <li>
              <a href="#"><b>About Us</b></a>
            </li>
          </ul>
        </div>
        <!-- right box for buttons -->
        <div class="right">
        <?php if (strlen($_SESSION['emailid'] !=0)) { ?>
          <button  class="btn"><a  href="logout.php" style="color: white;"> Logout </a></button>
<?php }?>
<?php if (strlen($_SESSION['emailid']==0)) { ?>
            <button  class="btn"><a  href="signlog.php" style="color: white;"> Log in/Sign Up </a></button>
            <?php }?>
        </div>
      </header>
      <div class="container">
          <p class="box" style="color: white"><b>NIRVANA WELCOMES !!!</b></p>
        <p class="ch"><b>Food tastes better when you eat it with your family</b></p>
        <!-- <p  style="color: white">Be our permanent guest by registering on our website</p> -->

        <!-- <p style="color: white">Do join our catering services</p> -->
        
        <form action="noaction.php">
            <p style="color: white"><b>DO YOUR FIRST ORDER BY REGISTERING HERE !</b></p>
          <div class="form">
            <input type="text" name="" placeholder="Enter your Name" />
          </div>
          <div class="form">
            <input type="text" name="" placeholder="Enter phone number">
          </div>
          <div class="form">
            <input type="text" name="" placeholder="Enter your Locality" />
          </div>
          <button class="btn">Submit</button>
        </form>
        <li>
            <ol>
                <p style="color: white"><b>AVAIL SOME SPECIAL DISCOUNT OFFERS.....!!!!</b></p>
                <p style="color: white"><b>ORDER ONLINE</b></p>
                <p style="color: white"><b>DINING OUT !</b></p>
                <p style="color: white"><b>NIGHTLIFE AND CLUBS</b></p>
            </ol>
        </li>
      </div>
      <hr><hr>
      <div class="beauty">
        <h2 class="hed"><u style="color: white">Welcome to NIRVANA_CUISINES</u> </h2>
        <div class="cont">
            <p><b>Good Service</b></p>
            <p>
                Waitrons know their jobs, are efficient and able to advise customers on the best choices. Food is served with minimal delay, and after the meal patrons don’t have to struggle to get their bill.</p>
        </div>
        <br>
        <div class="cont">
            <p><b>Reasonable Cost</b></p>
            <p>
                Restaurants have different price points, but the golden rule is that customers should feel that the cost of their meal was fair and reasonable, even in high-end establishments. Avoid overcharging.</p>
        </div>
        <br>
        <div class="cont">
            <p><b>Tasty Food</b></p>
            <p>
                Invariably the food is tasty and well prepared. The fare is appropriate for the price point and market it’s aimed at. It’s essential that patrons feel they've had a good, enjoyable meal.
            </p>
      </div>
      <div class="cont">
        <p><b>Range of Beverages</b></p>
        <p>
            A successful restaurant offers a good range of beverages that cater for different tastes. Although more complex to organize, it certainly pleases customers who want variety. Good restaurants stock popular cordials, wines, spirits and beers and avoid cheaper brands of dubious quality.
        </p>
  </div>

  <hr><hr>
  <h1 id="ds"><b><u> DASHBOARD</u></b></h1>
    <div class="db">
        <div class="item" id="item-1"><img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTB8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""></div>
        <div class="item" id="item-2"><img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTh8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""></div>
        <div class="item" id="item-3"><img src="https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTl8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""></div>
        <div class="item" id="item-4"><img src="https://images.unsplash.com/photo-1484980972926-edee96e0960d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MjN8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""></div>
        <div class="item" id="item-5"><img src="https://images.unsplash.com/photo-1455619452474-d2be8b1e70cd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mjd8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""></div>
        <div class="item" id="item-6"><img src="https://images.unsplash.com/photo-1565299585323-38d6b0865b47?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MzR8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""></div>
        <div class="item" id="item-7"><img src="https://images.unsplash.com/photo-1470337458703-46ad1756a187?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NDV8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt=""></div>
    </div>

      <footer>
          <p style="color: white">
            @nirvana_cuisine2022
            @manash</p>
      </footer>
</body>
</html>