
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

      
    </head>
    <body>
        
        <nav class="navbar navbar-inverse">
           
           <div class="container">
           <a class="navbar-brand" href="#">Title</a>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About</a>
                </li>
            </ul>
           </div>
           
        </nav>
        
        
        <div class="container">
            @yield('main')
        </div>
        
        <footer>
            
            <div class="container">
                <h3>Footer</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, harum reprehenderit consectetur nostrum ipsum doloribus eaque maiores veniam tempora provident voluptatibus laborum praesentium placeat repellendus asperiores! Est perspiciatis quisquam neque?
                </p>
            </div>
            
        </footer>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
