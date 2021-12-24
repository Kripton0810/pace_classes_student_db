<?php   
    include 'dbcon.php';
    include 'headerlay.php';
    $email = $_POST['studentemail'];
    $name = $_POST['studentname'];
    $phone = $_POST['studentphone'];
    $gender = $_POST['gender'];
    $byte = random_bytes(15);
    $token = bin2hex($byte);
    $query = "INSERT INTO `student`(`token`, `name`, `email`, `phone`, `gender`) VALUES ('{$token}','{$name}','{$email}','{$phone}','{$gender}')";
    $run = $con->query($query);
    if($run)
    {
        echo "<div class='alert alert-success' role='alert'>Data Inserted Successfully</div>";
    }
    else{
        echo "Already registed";
    }
    
    include 'footer.php';
?>