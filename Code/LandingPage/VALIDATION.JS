
// <form  name="signup"class="login" method="post" action="./register.php">
//                     <h3>Register Here</h3>
        
//                     <label class="reg-lbl" for="name">Name</label>
//                     <input name = "FullName" class="reg-ip" type="text" placeholder="Full Name" >
        
//                     <label class="reg-lbl" for="username">Username</label>
//                     <input name = "Username" class="reg-ip" type="text" placeholder="Email or Phone"  >
                    
//                     <label class="reg-lbl" for="password">Password</label>
//                     <input name = "Password" class="reg-ip" type="password" placeholder="Password"  >
        
//                     <label class="reg-lbl" for="address">Address</label>
//                     <input name = "Address" class="reg-ip" type="text" placeholder="Address" >
                    
//                     <input name = "regbtn" type="submit" value="Register" class="register">
//                 </form>
function validate() {
    if (document.signup.FullName.value == "") {
        alert("FULL NAME REQUIRED ");
        return false;
    }
    if (!/^[a-zA-Z]*$/g.test(document.signup.FullName.value)) {
        alert("Invalid characters");
        return false;
    }

    if ((document.signup.FullName.value.length) < 5 ||(document.signup.FullName.value.length) > 12) {
        alert(" NAME MUST BE OF 5 LETTER OR LESS THAN 12");
        return false;
    }
    

    if (document.signup.Username.value == "") {
        alert("EMAIL REQUIRED");
        return false;
    }

    if (!/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/g.test(document.signup.Username.value)) {
        alert("INVALID CHARACTER");
        return false;
    }

    if (document.signup.Password.value == "") {
        alert("PASSWORD REQUIRED");
        return false;
    }
    

    if(document.signup.Address.value==""){
        alert("ADDRESS REQUIRED");
        return false;
    }

    if((document.signup.Address.value)<20){
        alert("ADDRESS NOT MORE THAN 20");
        return false;
    }



  
  
    return (true);

}





