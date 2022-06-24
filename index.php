    <!--php-->
    <?php

    include('connect.php');
    

    $firstname = ($_POST['firstname']);    
    $lastname = ($_POST['lastname']);
    $age = $_POST['age'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
   
  

    $sql="INSERT INTO `students_tb` (`first_name`, `last_name`, `age`, `tel`, `email`, `user_name`, `password`) VALUES ('$firstname', '$lastname', '$age', '$tel', '$email', '$user_name', '$hashed_password')";

    if(mysqli_query($conn, $sql)){
        
        header("Location:index.html");
    }
?>