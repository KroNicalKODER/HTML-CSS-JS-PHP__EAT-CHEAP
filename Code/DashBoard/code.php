<html>

<head>
  <link href="https://fonts.cdnfonts.com/css/font" rel="stylesheet">
  <link rel="stylesheet" href="style2.css">
  <title>Eat Cheap: Get food at cheapest rate</title>
  <link rel="icon" href="../../LandingPage/images/logo.png" type="image/x-icon">
</head>

<body class="allcontent">

  <video autoplay muted loop id="myVideo">
    <source src="images/video.mp4" type="video/mp4">
  </video>

  <div class="content">
    <div class="container-1">
    <div id="logo"><img src="images/logo.png" alt=""></div>
    <span>EATCHEAP</span>
    </div>
    <div class="container-2">
    <span id="user">Welcome
      <?php
      $name = $_GET["name"];
      echo $name;
      ?>
    </span>

    <img src="images/personicon.png">
    </div>
  </div>
  <div class="content_1">
    <span> What will you have today?????</span>
  </div>
  <div class="container">

    <div class="search-bar">
      <input id="food-ip" type="text" placeholder="search food" name="food">
      <button name="btn" value="submit" type="submit" id="src-btn"><img src="images/SEARCH.png"></button>
</div>

  </div>
  <div class="box-con">
    <div class="box" id="breakfast">
      <div class="box-img">
        <img src="images/breakfast.png.jpg" alt="">
      </div>
      <div class="box_content">
        <h3>BREAKFAST</h3>
      </div>
    </div>
    <div class="box" id="lunch">
      <div class="box-img">
        <img src="images/lunch.png.jpg" alt="">
      </div>
      <div class="box_content">
        <h3>LUNCH</h3>
      
      </div>
    </div>

    <div class="box" id="dinner">
      <div class="box-img">
        <img src="images/dinner.png.jpg" alt="">
      </div>
      <div class="box_content">
        <h3>DINNER</h3>
      </div>
    </div>
  </div>


</BODY>

<script>
  const breakfast = document.getElementById("breakfast");
  breakfast.addEventListener("click",()=>{
    console.log("clicked");
    window.location.href="foodshow.php?q=BREAKFAST";
  })
  const lunch = document.getElementById("lunch")
  lunch.addEventListener("click",()=>{
    window.location.href="foodshow.php?q=LUNCH";
  })
  const dinner = document.getElementById("dinner")
  dinner.addEventListener("click",()=>{
    window.location.href="foodshow.php?q=DINNER";

  })
  const searc=document.getElementById("src-btn");
  searc.addEventListener("click",()=>{
    const str = document.getElementById("food-ip").value;
    console.log(str);
    window.location.href="foodshow.php?q="+str;
  })
</script>

</html>