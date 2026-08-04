<?php
if(!isset($_SESSION['loggedin'])){ //session is not automatically started in the beginning
    session_start();
}
$showAlert = false;
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_SESSION['loggedin'])){ //prevent multiple logins
        header("location: index.php");
        exit; //without exit command all code will execute
    }
    include '_dbconnect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from auth where username='$username' and password='$password'";
    $result = mysqli_query($con, $sql);
    $num=mysqli_num_rows($result);
    if ($num==0){
        $sql = "INSERT INTO `auth` (`username`, `password`) VALUES ('$username', '$password');";
        
        $result = mysqli_query($con, $sql);
        if ($result){
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            header("location: index.php");
        }
    }
    else {
        header("location: login.php");
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="bg-gray-800 bg-blend-multiply bg-[url('/codeimg.jpg')] bg-cover bg-center bg-no-repeat h-screen text-white">
        <?php
            include('nav.html')
        ?>
        <!-- hero section starts here -->
        <div class="mx-10">
            <h1 class="text-4xl text-center pt-35 mb-20">Signup</h1>
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
                echo "<h1 class='text-center'>Alerady logged in as ".$_SESSION['username']."</h1>";
            }
            ?>
            <form action="signup.php" method="post" class="flex flex-col">
                <h1>Username</h1>
                <input type="text" name="username" class="bg-neutral-100 mb-10 rounded-lg text-black py-1 px-2 focus:outline-none" placeholder="Username">
                <h1>Password</h1>
                <input type="password" name="password" class="bg-neutral-100 mb-20 rounded-lg text-black py-1 px-2 focus:outline-none" placeholder="Password">
                <input type="submit" value="Sign Up" class="bg-orange-500 w-30 h-10 m-auto text-2xl rounded-lg cursor-pointer mb-10">
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> 
    <script>
        $(function(){
            $('#burger').click(function(){
                $('#nav').toggleClass('hidden');
                $('#nav').toggleClass('block');
            })
        })
    </script>
</body>
</html>
