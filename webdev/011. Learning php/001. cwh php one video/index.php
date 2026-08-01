<?php
if (isset($_POST['username'])) {

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo"Success connecting to the db";

    $username2 = $_POST['username'];
    $password2 = $_POST['password'];

    $sql = "INSERT INTO `firtsdb`.`auth` (`username`, `password`) VALUES ('$username2', '$password2');";

    // echo $sql;

    if ($con->query($sql) == true) {
        echo "successfully inserted";
    } else {
        echo "error: $sql <br> $con->error";
    }

    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FirstApp</title>
</head>

<body>
    <h1>FirstApp</h1>
    <?php
    echo "Enter the form";
    ?>
    <form action="index.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="text" name="password" placeholder="password">
        <button>Submit</button>
    </form>
</body>

</html>
