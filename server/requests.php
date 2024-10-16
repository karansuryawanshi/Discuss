<?php
session_start();
include("../common/db.php");

if(isset($_POST["signup"])){ // signup functionality
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $address=$_POST["address"]; // data
    
    $user=$conn->prepare("Insert into `users`
    (`id`,`username`,`email`,`password`,`address`)
    values(NULL,'$username','$email','$password','$address');
    "); // quert to insert data into table

    // $user = $conn->prepare("INSERT INTO `users` ('id',`username`, `email`, `password`, `address`) VALUES (Null, '$username','$email','$password','$address')");

    $result = $user->execute();
    if($result){
        $_SESSION["user"] = ["username" => $username, "email" => $email]; // to save session id 
        header("location:/discuss"); // to move to home page after signup
    }else{
        echo"new user not regestered";
    } 
    
} else if(isset($_POST['login'])){ // login functionality
    $email=$_POST["email"];
    $password=$_POST["password"];
    $query="select * from users where email='$email' and password='$password'";
    $result = $conn->query($query);
    if($result->num_rows==1){
        foreach($result as $row){
            $username=$row['username'];
        }
          $_SESSION["user"] = ["username" => $username, "email" => $email]; // to save session id 
          header("location:/discuss");
    }else{
        echo"no user regestered";
    }
    }else if(isset($_GET['logout'])){ // logout functionality 
        session_unset();
        header("location:/discuss");
    }
?>