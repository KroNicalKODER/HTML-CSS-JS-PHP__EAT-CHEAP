<!DOCTYPE html>
<html lang="en">

<head>
    <link crossorigin="anonymous" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link crossorigin="anonymous" rel="stylesheet" href="style.css">
    <link crossorigin="anonymous" rel="preconnect" href="https://fonts.gstatic.com">
    <link crossorigin="anonymous" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link crossorigin="anonymous" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link crossorigin="anonymous" rel="preconnect" href="https://fonts.googleapis.com">
    <link crossorigin="anonymous" rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link crossorigin="anonymous" href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@700&display=swap" rel="stylesheet">
    <link crossorigin="anonymous" href="//db.onlinewebfonts.com/c/747917559efeeb74de830d22b204156c?family=Bantayog" rel="stylesheet"
        type="text/css">
    <link crossorigin="anonymous" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eat Cheap: Get food at cheapest rate</title>
    <link rel="icon" href="../../LandingPage/images/logo.png" type="image/x-icon">

</head>

<body>
    <div class="container1" id="cont1">
        <nav class="navbar" id="nav">
            <img id="logoImg" src="../../LandingPage/images/logo.png">
            <ul class="nav-items" id="navItems">
                <li class="nav-item"><a href="#"><i class="bi-nav bi-house"></i>Home</a></li>
                <li class="nav-item"><a href="#"><i class="bi-nav bi-people-fill"></i>About</a></li>
                <li id="icon1" class="nav-item"><a href="#"><i class="bi bi-nav bi-camera-reels-fill"></i>Gallery</a>
                <li id="icon3" class="nav-item"><a href="#"><i class="bi bi-nav bi-percent"></i>Offers</a></li>
                <li id="icon2" class="nav-item"><a href="#"><i class="bi-nav bi-telephone-fill"></i>Contact Us</a></li>
            </ul>
        </nav>
        <div class="img1-container">

        </div>
        <div class="mid" id="midId">
            <p class="wc-text">Welcome to</p>
            <img class="title" src="../../LandingPage/images/title1.png" width="35%">
            <p class="quote">
                Get you the dishes at lowest price from your favourite restaurants
            </p>
            <button class="login-signup-btn">GET STARTED</button>
        </div>
    </div>
    <div class="container2 hidden1" id="container2">
        
        <div class="text" id="started">
            Let's get you started
        </div>
        <div id="cravingSomethingdiv" class="op0">
        <img id="cravingSomething" src="../../LandingPage/images/cravingsomething.png" alt="">
        </div>
        <div class="mid-scr2">
            <div class="images" id = "imgs">
                <img id="img-1" src="../../LandingPage/images/scr-2-food-1.png">
                <img id="img-2" src="../../LandingPage/images/scr-2-food-2.png">
                <img id="img-3" src="../../LandingPage/images/scr-2-food-3.png">
            </div>
            <div class="login-form hidden1" id="loginForm">
                <form  class="login" method="POST" action="./login.php" >
                    <h3>Login Here</h3>
        
                    <label for="username">Username</label>
                    <input name = "log-user" type="text" placeholder="Email or Phone"  >
        
                    <label for="password">Password</label>
                    <input name = "log-pass" type="password" placeholder="Password"  >
        
                    <input name = "logbtn" type="submit" value="Log In" class="push-login">
                    <div class="social">
                        <div class="go"><i class="fab fa-google"></i> Google</div>
                        <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
                    </div>
                </form>
            </div>
            <div class="signUp-form hidden1" id="signUp-form">
                <form  name="signup"class="login" method="post" action="./register.php" onsubmit="return(validate())">
                    <h3>Register Here</h3>
        
                    <label class="reg-lbl" for="name">Name</label>
                    <input name = "FullName" class="reg-ip" type="text" placeholder="Full Name" >
        
                    <label class="reg-lbl" for="username">Username</label>
                    <input name = "Username" class="reg-ip" type="text" placeholder="Email or Phone"  >
                    
                    <label class="reg-lbl" for="password">Password</label>
                    <input name = "Password" class="reg-ip" type="password" placeholder="Password"  >
        
                    <label class="reg-lbl" for="address">Address</label>
                    <input name = "Address" class="reg-ip" type="text" placeholder="Address" >
                    
                    <input name = "regbtn" type="submit" value="Register" class="register">
                </form>
            </div>
        </div>
        <div class="right-btns" id="r-btn">
            <button id="sign-btn" class="btns">SIGNUP</button>
            <button id="login-btn" class="active-btn btns">LOGIN</button>
        </div>
    </div>
</body>

<script>
function validate() {
    if (document.signup.FullName.value == "") {
        alert("FULL NAME REQUIRED ");
        return false;
    }
    if (!/^[a-zA-Z/\s/]*$/g.test(document.signup.FullName.value)) {
        alert("Invalid characters");
        return false;
    }

    if (document.signup.Username.value == "") {
        alert("EMAIL REQUIRED");
        return false;
    }

    if (!/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/g.test(document.signup.Username.value)){
            alert("INVALID CHARACTER");
            return false;
        }

    if (document.signup.Password.value == "") {
        alert("PASSWORD REQUIRED");
        return false;
    }
    
    if(!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/g.test(document.signup.Password.value)){
            alert("PASSWORD MUST CONTAIN 8-20 CHARACTER AND UPPERCASE LOWERCASE AND SPECIAL CHARACTER REQUIRED");
            return false;
        }

    if(document.signup.Address.value==""){
        alert("ADDRESS REQUIRED");
        return false;
    }

    return (true);

}


    const btn = document.querySelector(".login-signup-btn");
    btn.addEventListener("click", () => {
        console.log("clicked")
        document.getElementById("cont1").classList.add("anim-container-1")
        document.getElementById("container2").classList.remove("hidden1");
        document.getElementById("container2").style.opacity = "0";
        document.getElementById("imgs").style.opacity = "0";
        document.getElementById("r-btn").style.opacity = "0";
        document.getElementById("r-btn").classList.add("anim-r-btn");
        document.getElementById("started").style.opacity="0";
        document.getElementById("started").classList.add("anim-craving-text");
        document.getElementById("container2").classList.add("anim-container-2");
        document.getElementById("cravingSomethingdiv").classList.add("anim-craving-text")
        document.getElementById("midId").classList.add("hidden");
        document.getElementById("imgs").classList.add("anim-images")
        document.getElementById("icon1").classList.add("hidden");
        document.getElementById("icon2").classList.add("hidden");
        document.getElementById("icon3").classList.add("translate-navItem");
        document.getElementById("logoImg").style.display = "none";
        document.getElementById("nav").classList.add("nav-nocolor");
        document.getElementById("navItems").classList.add("translate-navItems");
        document.getElementById("container2").style.opacity = "1";
        signBtn.classList.remove("active-btn");
        loginBtn.classList.add("active-btn");
        signUpForm.classList.add("hidden1");
        loginForm.classList.remove("hidden1");
        loginForm.classList.add("anim-signForm-ent");
    })
    const loginBtn = document.getElementById("login-btn");
    const signUpForm = document.getElementById("signUp-form");
    const signBtn = document.getElementById("sign-btn");
    const loginForm = document.getElementById("loginForm");
    loginBtn.addEventListener("click",()=>{
        signBtn.classList.remove("active-btn");
        loginBtn.classList.add("active-btn");
        signUpForm.classList.add("hidden1");
        loginForm.classList.remove("hidden1");
        loginForm.classList.add("anim-signForm-ent");        
    })
    signBtn.addEventListener("click",()=>{
        loginBtn.classList.remove("active-btn");
        signBtn.classList.add("active-btn");
        loginForm.classList.add("hidden1");
        signUpForm.classList.remove("hidden1");
        signUpForm.classList.add("anim-signForm-ent");        
    })
</script>

</html>