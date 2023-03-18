<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('custom-css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('custom-css/custom.css') }}">
    <script src="https://kit.fontawesome.com/d4cbcb96c8.js" crossorigin="anonymous"></script>
    <!-- hier wird der Wert von der section "title" eines blade templates ausgefüllt,
    welches dieses layout "extended" -->
    <title>@yield('title')</title>
    
</head>
<body>
    <div class="container">
        <div class="row justify-content-center alert alert-info" role="alert">
            <!-- hier wird auch der Wert von der section "title" eines blade templates ausgefüllt, welches dieses layout "extended" -->
            <h1><i class="fa-brands fa-twitter fa-spin" style="--fa-animation-iteration-count: 1;"></i><a href="/messages">@yield('title')</a></h1>
            <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt, welches dieses layout "extended" -->
            @yield('content')
            <!-- hier wird die php Funktion date() aufgerufen mit dem Format-Pattern 'd.m.Y' und im html ausgegeben-->
         
        </div>
    </div>
    {{-- <script>
        document.querySelectorAll('.like-button').forEach(button => {
            button.addEventListener('click', async () => {
                const messageId = button.dataset.messageId;
                const response = await fetch(`/message/${messageId}/like`, { method: 'POST' });
                if (response.ok) {
                    const likeCountElement = button.nextElementSibling;
                    const likeCount = parseInt(likeCountElement.innerText);
                    likeCountElement.innerText = likeCount + 1;
                }
            });
        });
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>