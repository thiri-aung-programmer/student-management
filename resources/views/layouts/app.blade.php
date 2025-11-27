<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head')
    <link rel="stylesheet" href="styles.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        *{
            padding:0;
            margin: 0;
            max-width: 100vw;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding:0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            max-width: 100%;
        }
        nav{
            max-width: 100%;
            margin:0;
        }
        nav ul{
            list-style-type: none;
            padding: 0;
            background: #005bb5;
            overflow: hidden;
            display:flex;
            justify-content: center;
        }
        nav ul li{
            padding: 14px 20px;
        }
        nav ul li a{
            color:white;
            text-decoration: none;
        }
        .main-container{
            display: flex;
            flex:1;
            padding:0;
            margin:0;
        }
        .sidebar{
            width:150px;
            background:#f4f4f4;
            padding:15px;
            margin:0;
        }
        .main-content{
            flex:1;
            padding:20px;
            margin:0;
        }
        footer{
            background: #004080;
            color:white;
            text-align: center;
            padding:10px;
            position: relative;
            bottom: 0;
            max-width: 100%;
        }
         @yield('styles')
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </nav>
    <div class="main-container">
        <aside class="sidebar">
            <h2>SideBar</h2>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </aside>
        <main class="main-content">
            {{-- <section>
                <h2>About Us</h2>
                <p>This is a simple HTML and CSS Template to start your project.</p>
            </section> --}}
            @yield('content')
        </main>
    </div>
    <footer>
        <p>&copy;2025 My Website. All rights reserved</p>
    </footer>
    
</body>
@yield('scripts')
</html>