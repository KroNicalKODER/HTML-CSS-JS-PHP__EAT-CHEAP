<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
function checkUsername($str){
    $conn = mysqli_connect("localhost:3307", "root", "", "dswproject");
    $result = mysqli_query($conn,"SELECT * FROM customer");
    
    while($row = mysqli_fetch_array($result)){
        echo $row["Username"] . ' - ' . $str . '<BR>';
        if(strcmp($row["Username"],$str)==0){
            return 0;
        }
    }
    return 1;
}
if(isset($_POST["regbtn"])){
    $Username = $_POST["Username"];
    if (checkUsername($Username)) {
        $Username = '"'.$_POST["Username"].'"';
        $FullName = '"' . $_POST["FullName"] . '"';
        $Password = '"' . $_POST["Password"] . '"';
        $Address = '"' . $_POST["Address"] . '"';
        $conn = mysqli_connect("localhost:3307", "root", "", "dswproject");
        $sql = 'INSERT INTO customer VALUES (' . $FullName . ',' . $Username . ',' . $Password . ',' . $Address . ')';
        mysqli_query($conn, $sql);
        header('Location: ../DashBoard/code.php?name='.$FullName.'&Address='.$Address);
    }
    else{
        header("Location: ../ErrorPage/RegisterErr.html");
    }
}
?>