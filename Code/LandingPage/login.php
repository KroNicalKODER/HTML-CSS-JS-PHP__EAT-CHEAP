<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
function isFound($usee,$pass){
    $conn = mysqli_connect("localhost:3307", "root", "", "dswproject");
    $sql = 'SELECT * FROM Customer WHERE Username = "' . $usee . '"';
    $result = mysqli_query($conn, $sql);
    $found = 0;
    while($name = mysqli_fetch_array($result)){
        // echo $name["Username"].' password: '.$name["Password"].'<BR>';
        if(strcmp($name["Username"],$usee)==0 and strcmp($name["Password"],$pass)==0){
            $found = 1;
            $FullName = $name["FullName"];
            $Address = $name["Address"];
            header('Location: ../DashBoard/code.php?name='.$FullName.'&Address='.$Address);
        }
    }
    if($found == 0) {
        header("Location: ../ErrorPage/UserNotFound.html");
    }
}
if(isset($_POST["logbtn"])){
    $username = $_POST["log-user"];
    $password = $_POST["log-pass"];
    isFound($username,$password);
}
?>