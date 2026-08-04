<?php
session_start();
if (isset($_POST['logout'])) {
    
    if (session_status() === PHP_SESSION_NONE) {
        echo "<h1> no session running</h1>";
    }
    else {
        session_destroy();
        header("Location: login.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mobile first</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="bg-gray-800 bg-blend-multiply bg-[url('/codeimg.jpg')] bg-cover bg-center bg-no-repeat h-screen">
        <?php
        include('nav.html')
        ?>
        <!-- hero section starts here -->
        <div id="hero" class="text-white mx-6 ">
            <h1 class="text-4xl text-center pt-20 mb-10">My Projects</h1>
            <div id="projects">
                <a class="block text-2xl border rounded p-4 hover:text-black hover:bg-neutral-100 cursor-pointer" href="notes.php">Notes App</a>
            </div>

            <form action="notes.php" method="post">
                <input type="submit" name="logout" value="Logout" class="bg-orange-500 w-30 h-10 m-auto text-2xl rounded-lg cursor-pointer mb-10">
            </form>
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
