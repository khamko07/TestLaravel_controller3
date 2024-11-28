<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .nav {
            background-color: #444;
            overflow: hidden;
        }
        .nav a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .content {
            padding: 20px;
        }
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        @yield('style')
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to Khamko Blog</h1>
    </div>
    <div class="nav">
        <a href="/">Home</a>
        <a href="/category">Category</a>
        <a href="/post">Post</a>
        <a href="/contact">Contact</a>
        <a href="/about">About</a>
        <a href="/register">Regsiter</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        <p>&copy; 2025 Khamko Blog</p>
    </div>

</body>
</html>
