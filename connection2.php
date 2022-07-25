<html>
<body>
<?php 
 include_once("connection.php"); 
 session_start(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
    if (empty($_POST['username']) || empty($_POST['password']))  
    { 
        echo 
        "Incorrect username or password"; 
        header("location: login.php"); 
    }
     $inUsername = $_POST["username"];  
     $inPassword = $_POST["password"]; 
     $stmt= $conn->prepare("SELECT USERNAME, PASSWORD FROM LOGIN WHERE USERNAME = '$inUsername' AND PASSWORD = '$inPassword'"); 
     $stmt->bind_param("s",$inUsername); 
     $stmt->execute();
     $stmt->bind_result($UsernameDB, $PasswordDB); 
     if ($stmt->fetch() ) 
     {
        $_SESSION['username']=$inUsername ; 
        header("location: Home.php"); 
     }
     else
     {
           echo "Incorrect username or password"; 
          ?>         
          <a href="login.php">Login</a>
       <?php 
     } 
} 
       ?>
</body> 
</html>