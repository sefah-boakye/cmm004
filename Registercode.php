<?php

include('connection.php');
 $Name=$_POST['Name'];

 $Email=$_POST['Email'];
 $Password=$_POST['Password'];
 $ConfirmPassword=$_POST['Confirmpassword'];

    if($password !== $confirmpassword)
    {
       echo "password and confirm password are not same";
    }
       
    else
    {   
        $sql = "INSERT INTO register (Name,Email,Password, Confirm Password) VALUES ('$Name','$email','$password', '$confirmpassword')";
        $result = mysqli_query($db, $sql);

        if($result)
        {
            echo "Registered Successfully";
            header("Location:index.php");
        }
        else
        {
            echo "Something Went Wrong!";
            header("Location: inde.php");
        }
    }
   
?>