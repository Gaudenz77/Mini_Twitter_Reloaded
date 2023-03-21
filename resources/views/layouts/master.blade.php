<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite(['resources/css/app.css','resources/sass/app.scss','resources/css/areset.css', 'resources/css/custom.css'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/d4cbcb96c8.js" crossorigin="anonymous"></script>
    <!-- hier wird der Wert von der section "title" eines blade templates ausgefüllt,
    welches dieses layout "extended" -->
    
    
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            {{-- <div class="row justify-content-center alert alert-info" role="alert"> --}}
            <!-- hier wird auch der Wert von der section "title" eines blade templates ausgefüllt, welches dieses layout "extended" -->
            <h1><i class="fa-brands fa-twitter fa-spin titlelogo" style="--fa-animation-iteration-count: 1;"></i><a href="/messages">@yield('title')</a></h1>
            <p><button class="btn btn-info" onclick="toggleDarkMode()">Toggle Dark Mode</button></p>
            <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt, welches dieses layout "extended" -->
            @yield('content')
            <!-- hier wird die php Funktion date() aufgerufen mit dem Format-Pattern 'd.m.Y' und im html ausgegeben-->
        </div>
    </div>
   

<!-- toggle mode script start -->
<script>
    function toggleDarkMode() {
      document.body.classList.toggle('dark-mode');
    }
</script>
<!-- toggle mode script end-->
    @vite(['resources/js/custom.js', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>