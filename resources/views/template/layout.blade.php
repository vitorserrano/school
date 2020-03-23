<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>School</title>

        <link 
            rel="stylesheet" 
            href="{{ url('assets/styles/lib/bootstrap.min.css') }}"
        />

        <link 
            rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        />

        <link 
            rel="stylesheet"
            href="{{ url('assets/styles/global.css') }}"
        />
    </head>

    <body>  
        <header>
        <nav class="navbar shadow-sm rounded" style="background: #e9ecef;">
            <a class="navbar-brand" href="/" style="font-size: 22px; color: #8a3efc;">
                <strong>SCHOOL</strong>
            </a>
        </nav>
        </header>

        <main class="container">
            @yield('content')
        </main>

        <footer>
            <p>Made By <a href="https://github.com/vitorserrano" target="_blank">Vitor Serrano</a></p> 
        </footer>
    
        <script src="{{ url('assets/js/lib/jquery-3.4.1.slim.mim.js') }}"></script>
        <script src="{{ url('assets/js/lib/popper.min.js') }}"></script>
        <script src="{{ url('assets/js/lib/bootstrap.min.js') }}"></script>
    </body>

</html>