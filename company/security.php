<?php
include("../auth/db.php");
$qry = "SELECT * FROM `user` WHERE email = '$_GET[email]' AND password = '$_GET[password]'";
$sql = mysqli_query($conn,$qry);
if (mysqli_num_rows($sql) !== 1){
    echo "<script>alert('123')</script>";
    echo "<script>$('#welcomeMessageModal').modal('show');</script>";
}else{
    $request = mysqli_fetch_assoc($sql);
}

// echo $_SESSION['userid'];
if(isset($_SESSION['id'])&isset($_SESSION['permission'])){
    if($_SESSION['permission']=="company"){

    }else{
        // echo"<script>alert('company not exist')</script>";
    }
}else{
    // echo"<script>alert('id permission not exist')</script>";
}
?>