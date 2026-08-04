<?php
session_start();
if (!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="bg-gray-800 bg-blend-multiply bg-[url('/codeimg.jpg')] bg-cover bg-center bg-no-repeat h-screen text-white">
        <?php
            include('nav.html')
        ?>
        <div id="hero" class="text-white mx-6">
            <img src="coder.png" class="h-95 m-auto pt-15 mb-10">
            <?php
            echo $_SESSION['username'];
            ?>
            <h1 class="text-5xl mb-10">About me</h1>
            <p class="mb-10">I am a highly motivated fullstack developer skilled in html, css, js, tailwind, jquery, php, mysql. Check out my projects below.</p>
            <a href="projects.php" class="border rounded px-6 py-3 text-2xl hover:text-black hover:bg-neutral-100">Projects</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(function() {
            $('#burger').click(function() {
                $('#nav').toggleClass('hidden');
                $('#nav').toggleClass('block');
            })
        })
    </script>
</body>

</html>
