<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home App</title>
    <link rel="stylesheet" href=" {{ asset('css/main.css')}} ">
    <link rel="stylesheet" href=" {{ asset('css/responsive.css')}} ">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css"
      />
</head>
<body>
    
    @include('partials.navbar')

    <div class="main-content">

        @yield('content')

        <div class="sideWidget">
            <form action="">
                <input type="text" placeholder="Search" class="search-input">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

    </div>

    <div class="popup">
        <div class="bg-modal"></div>
        <div class="modal">
            <p>Are you sure want to delete this post?</p>
            <div class="choice">
                <a href="" class='yes'>Yes</a>
                <a href="" class="cancel">Cancel</a>
            </div>
    </div>
    </div>

    <script src=" {{ asset('js/index.js')}} "></script>
    @stack('js')
</body>
</html>