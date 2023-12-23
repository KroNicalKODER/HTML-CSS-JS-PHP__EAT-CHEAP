<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style1.css">
    <title>Eat Cheap: Get food at cheapest rate</title>
  <link rel="icon" href="../../LandingPage/images/logo.png" type="image/x-icon">

</head>
<body> 
     
   <img src="images/logo.png" alt="" width="75px" height="75px">
   <span id="logo">EAT CHEAP</span> 
   <!-- <button  id="SEARCH"type="submit"><img src="SEARCH.png"></button> -->

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <h3>spicy noodles</h3>
                    <span>OFFER 45%</span>
    
                
                </div>
                <div class="image">
                    <img src="images/home-img-1.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <h3>fried chicken</h3>
                    <span>OFFER 35%</span>
    
                </div>
                <div class="image">
                    <img src="images/home-img-2.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <h3>hot pizza</h3>
                    <span>OFFER 20%</span>
                    
                </div>
                <div class="image">
                    <img src="images/home-img-3.png" alt="">
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>



<section class="dishes" id="dishes">

    <h3 class="sub-heading"> our dishes </h3>
    <h1 class="heading"> popular dishes </h1>

    <div class="box-container">
        <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            $str = $_GET['q'];
            $sql='';
            if(strcmp($str,"BREAKFAST")==0 || strcmp($str,"LUNCH")==0 || strcmp($str,"DINNER")==0){
                $sql = 'SELECT * FROM food_tablee WHERE food_time="'.$str.'" ORDER BY Price ASC';
            } else {
                $sql = 'SELECT * FROM food_tablee WHERE Food_name="'.$str.'" ORDER BY Price ASC';
            }
            $conn = mysqli_connect("localhost:3307", "root", "", "dswproject");
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result)){
                echo'
                    <div class="box">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <img src="'.$row["link"].'" alt="">
                        <h3>'.$row["Food_name"].'</h3>
                        <div class="rest">'.$row["Application"].'</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span>'.$row["Price"].'</span>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                '; 
            }
        ?>
    </div>

</section>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<script src="script.js"></script>

</body>
</html>