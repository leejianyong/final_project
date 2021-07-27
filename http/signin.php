<?php
  include_once('./auth/db.php');
  
  if(isset($_POST['submit'])){
    if(!empty($_POST['email'])&!empty($_POST['password'])){
      echo $qry = "SELECT * FROM user WHERE email = '$_POST[email]' AND password = '$_POST[password]'";
      $sql = mysqli_query($conn,$qry);
      if (mysqli_num_rows($sql) !== 1){
        echo "<script>$('#welcomeMessageModal').modal('show');</script>";
      }else{
        $request = mysqli_fetch_assoc($sql);
        switch ($request['permission']) {
          case "admin":
            echo "<script>window.location.href='./admin/index.php'</script>";
            break;
          case "company":   
            echo "<script>window.location.href='./company/security.php?userid=$request[id]&email=$request[email]&password=$request[password]'</script>";
            break;
          case "user":
            echo "<script>window.location.href='./user/index.php'</script>";
            break;
          default:
            echo "<script>$('#welcomeMessageModal').modal('show');</script>";
        }
      }
    }
  }
?>
