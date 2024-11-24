<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - HTMX Go Blog App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        header {
            background-color: #f1f1f1;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid #ddd;
        }
        header h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        nav a {
            margin-right: 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
        }
        nav a:hover {
            background-color: #ddd;
        }
        .container {
            text-align: center;
            margin-top: 50px;
        }
        .container h2 {
            font-size: 28px;
            color: #2c3e50;
        }
        .container p {
            font-size: 18px;
            color: #555;
        }
        .container .buttons a {
            display: inline-block;
            margin: 10px 15px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .container .buttons a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <header>
        <h1>HTMX Go Blog App</h1>
        <nav>
            <a href="/blogs">List Blogs</a>
            <a href="/blogs/create">Create Blog</a>
        </nav>
    </header>

    <div class="container">
        <h2>Welcome to HTMX Go Blog App</h2>
        <p>Explore blogs created by others or start creating your own blog today!</p>
        <div class="buttons">
            <a href="/blogs">List Blogs</a>
            <a href="/blogs/create">Create Blog</a>
        </div>
    </div>

    

    @if(Auth::check())
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @endif

</body>
</html>
