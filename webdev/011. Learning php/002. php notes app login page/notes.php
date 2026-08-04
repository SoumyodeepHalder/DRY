<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mobile first</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="bg-gray-800 bg-blend-multiply bg-[url('/codeimg.jpg')] bg-cover bg-center bg-no-repeat h-screen text-white overflow-y-auto scrollbar-width-none [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden">
        <?php
            include('nav.html')
        ?>
        <!-- hero section starts here -->
        <div class="mx-5 mt-15">
            <h1 class="text-4xl text-center mt-5 mb-10">My Notes</h1>
            <div class="grid grid-cols-2 gap-2">
                <div class="w-full border rounded p-4">
                    <h1 class="text-2xl mb-3">Python</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam reiciendis voluptatum cum quis eum aut sequi adipisci esse. Ducimus, magni.</p>
                </div>
                <div class="w-full border rounded p-4">
                    <h1 class="text-2xl mb-3">JavaScript</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam reiciendis voluptatum cum quis eum aut sequi adipisci esse. Ducimus, magni.</p>
                </div>
                <div class="w-full border rounded p-4">
                    <h1 class="text-2xl mb-3">C++</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam reiciendis voluptatum cum quis eum aut sequi adipisci esse. Ducimus, magni.</p>
                </div>
                <div class="w-full border rounded p-4">
                    <h1 class="text-2xl mb-3">C++</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam reiciendis voluptatum cum quis eum aut sequi adipisci esse. Ducimus, magni.</p>
                </div>
                <div class="w-full border rounded p-4">
                    <h1 class="text-2xl mb-3">C++</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam reiciendis voluptatum cum quis eum aut sequi adipisci esse. Ducimus, magni.</p>
                </div>
                <div class="w-full border rounded p-4">
                    <h1 class="text-2xl mb-3">C++</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam reiciendis voluptatum cum quis eum aut sequi adipisci esse. Ducimus, magni.</p>
                </div>
            </div>
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
